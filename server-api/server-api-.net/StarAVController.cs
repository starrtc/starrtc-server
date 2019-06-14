using Newtonsoft.Json.Linq;
using System;
using System.Collections.Generic;
using System.IO;
using System.Linq;
using System.Net;
using System.Text;
using System.Web;
using System.Web.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Security.Cryptography;
using MySql.Data.MySqlClient;
using Newtonsoft.Json;

namespace StarRTC.Controllers
{
    public class StarRTCController : Controller
    {
        //
        // GET: /StarRTC/
        string appID      = "your appid";
        string secret     = "your secret";
        string guardToken = "your guardToken";
        public class StarAVResponse
        {
            [JsonProperty]
            private string status;
            [JsonProperty]
            private string data;

            public string getStatus()
            {
                return status;
            }

            public void setStatus(string status)
            {
                this.status = status;
            }
            public string getData()
            {
                return data;
            }

            public void setData(string data)
            {
                this.data = data;
            }
            public String IM_toString()
            {
                return JsonConvert.SerializeObject(this);
            }
        }     

        public ActionResult GetSign(string data, string sign)
        {
            JObject jobject = JObject.Parse(data);
            string action = ((string)jobject["action"]).Trim();
            string tsign = HmacSha1Sign(guardToken, data);         
            if (action.Equals("AEC_ACCESS_VALIDATION"))
            {
                string echostr = ((string)jobject["echostr"]).Trim();
                StarAVResponse response = new StarAVResponse();
                response.setData(echostr);
                response.setStatus("1");
                return Content(response.IM_toString());
            }
            return Content("-1");
        }
        public static string HmacSha1Sign(string key, string strOrgData)
        {
            var hmacsha1 = new HMACSHA1(Encoding.UTF8.GetBytes(key));
            var dataBuffer = Encoding.UTF8.GetBytes(strOrgData);
            var hashBytes = hmacsha1.ComputeHash(dataBuffer);
            return Convert.ToBase64String(hashBytes);
        }
        [HttpPost]
        public ActionResult PushToWeb(string userid)
        {
            Maticsoft.BLL.y_users bll = new Maticsoft.BLL.y_users();            
            StringBuilder sms = new StringBuilder();
            sms.AppendFormat("https://api.starRTC.com/aec/authKey?appid={0}", appID);          
            sms.AppendFormat("&secret={0}", secret);
            sms.AppendFormat("&userid={0}", userid);
            byte[] byteArray = Encoding.UTF8.GetBytes("");
            HttpWebRequest webRequest = (HttpWebRequest)WebRequest.Create(new Uri(sms.ToString()));
            webRequest.Method = "GET";
           
            HttpWebResponse response = (HttpWebResponse)webRequest.GetResponse();
            StreamReader aspx = new StreamReader(response.GetResponseStream(), Encoding.UTF8);
            string ret = aspx.ReadToEnd();
            JObject jobject = JObject.Parse(ret);
            int status = ((int)jobject["status"]);            
            if (status == 1)
            {
                string authkey = ((string)jobject["data"]).Trim();
                Maticsoft.Model.y_users mod = bll.GetModel(userid);
                if (mod != null)
                {
                    mod.authkey = authkey;
                    bll.Update(mod);                 
                }
            }
            return Content(ret);
        }
    }
}
