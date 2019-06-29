// author admin@elesos.com

//请参考：https://docs.starrtc.com/en/docs/aec-index.html

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
    
  
  router.GET("/eventCenter", func(c *gin.Context) {
    data := c.DefaultQuery("data", "")
    if data == "" {
      c.JSON(200, gin.H{
        "status":0,
        "data":"invalid args",
      })
      return
    }    
        
    
    var data_obj map[string]interface{} 
    json.Unmarshal([]byte(data), &data_obj) 
    
	
    if "AEC_GROUP_CREATE" == data_obj["action"] {
     c.JSON(200, gin.H{
          "status":0,
          "data":"you have no rights to create group",
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


