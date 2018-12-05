
  const vm = new Vue({
      el: '#text2',

      data: {
          mainmessage : " "
          
      },

      created : function() {
          this.fetchData(null);
      },

      methods : {
          fetchData(e) {
              let targetURL = `./includes/connect.php`;// this will be a number (id)

       
              fetch(targetURL) // pass in the one or many query
              .then(res => res.json())
              .then(data => {
                      console.log(data)
                      this.textData(data[0]);
                  })
                      .catch(function(error) {
                        console.error(error);
                    
              });
            },
              info() {
                //debugger;
                this.info=true;
              },
              textData(data) {
                this.mainmessage = data.text
              }
            }
           });
           
            function inputData(text) {
              const { text } = mainmessage;
              document.querySelector(".wtf").textContent = text;
            

          };