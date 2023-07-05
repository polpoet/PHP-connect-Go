package main

import (
	"fmt"
	"io"
	"log"
	"net/http"

	"github.com/gin-gonic/gin"
	"sortcustom.local/sortcustom"
)

func main() {
	router := gin.Default()

	router.GET("/ping", func(c *gin.Context) {

		c.JSON(http.StatusOK, gin.H{
			"message": "pong",
		})
	})

	router.POST("/strategyGoA", func(c *gin.Context) {

		jsonPrep, err := io.ReadAll(c.Request.Body)

		if err != nil {
			log.Fatalf("iderr-1 strategyGoA read body failed: %s", err)
		}

		r := sortcustom.CustomSort(jsonPrep)
		fmt.Println(r)

		c.JSON(http.StatusOK, gin.H{
			"note":   "Получение ответа в пхп из go",
			"result": r,
		})
	})

	router.Run(":9433") // listen and serve on 0.0.0.0:8080 (for windows "localhost:8080")
}
