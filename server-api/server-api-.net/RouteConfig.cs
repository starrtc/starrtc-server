using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using System.Web.Routing;
using yydrweb.Controllers;
using yydrWeb.IM;

namespace yydrweb
{
    public class RouteConfig
    {
        public static void RegisterRoutes(RouteCollection routes)
        {
            routes.IgnoreRoute("{resource}.axd/{*pathInfo}");
            routes.MapRoute(
                name: "Default",
                url: "{controller}/{action}/{id}",
                defaults: new { controller = "StarAV", action = "Index", id = UrlParameter.Optional }
            );
            //GetAllUserid();
        }
        //public static void GetAllUserid()
        //{
        //    Maticsoft.BLL.y_users  ubll=new Maticsoft.BLL.y_users();
        //    String sql = "userid <> '' and token <> ''";
        //   IMController.userlist= ubll.GetModelList(sql);
        //}
    
    }
}