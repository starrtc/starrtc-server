// author admin@elesos.com
package main

import (
       "fmt"
       "github.com/gin-gonic/gin"
       "net/http"
       "io/ioutil"
       "strings"
       "encoding/json"
       "crypto/hmac"
       "crypto/sha1"
       "encoding/base64"
)
func main() {
  fmt.Printf("Let's go...")
  router := gin.Default()
 
  type Respjson struct{
    Status int
    Data string
  } 
  router.GET("/authKey", func(c *gin.Context) {
    userid := c.DefaultQuery("userid", "")
    if userid == "" {
      c.JSON(200, gin.H{
        "status":0,
        "data":"invalid args",
      })
      return
    }
   
    resp, err := http.Post("https://api.starRTC.com/aec/authKey", "application/x-www-form-urlencoded", 
                           strings.NewReader("appid=your appid&secret=your secret&userid=userid"))
    if err != nil {
      c.JSON(200, gin.H{
          "status":0,
          "data":"post failed",
        })
        return  
    }
    
    defer resp.Body.Close()
    body, err := ioutil.ReadAll(resp.Body)
    if err != nil {
      c.JSON(200, gin.H{
        "status":0,
        "data":"read failed",
      })
      return
    }
   var respjson Respjson
   json.Unmarshal([]byte(body), &respjson)
   fmt.Println(respjson)
   c.JSON(200, gin.H{"status":1, "data":respjson.Data})
   return 
  })
  
  router.GET("/eventCenter", func(c *gin.Context) {
    data := c.DefaultQuery("data", "")
    sign := c.DefaultQuery("sign", "")
    if data == "" || sign == "" {
      c.JSON(200, gin.H{
        "status":0,
        "data":"invalid args",
      })
      return
    }    
    fmt.Println("sign=", sign)
    signature := generateSign([]byte(data),  []byte("your guardToken"))
    fmt.Println("signature=", signature)
    if sign != signature {
      c.JSON(200, gin.H{
        "status":0,
        "data":"invalid sign",
      })
      return
    }
    var data_obj map[string]interface{} 
    json.Unmarshal([]byte(data), &data_obj) 
    fmt.Println(data_obj["echostr"])
    if "AEC_ACCESS_VALIDATION" == data_obj["action"] {
     c.JSON(200, gin.H{
          "status":1,
          "data":data_obj["echostr"],
        })
        return
    }
    //TODO process other actions
    c.JSON(200, gin.H{
         "status":0,
         "data":"unkown action",
       })
       return
  })
 
  router.Run(":9091")
}


func generateSign(data,  key []byte) string {
	mac := hmac.New(sha1.New, key)
	mac.Write(data)
	expectedMAC := mac.Sum(nil)
        return base64.StdEncoding.EncodeToString(expectedMAC)
}
