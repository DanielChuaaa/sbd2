var http = require('http');
            var url = require('url');
            var qs = require('querystring');
            var db = require("./db_config");
            var port = 8080
            http.createServer(function (req, res) {
                var q = url.parse(req.url, true);
                
                var id = q.query.id;
                res.setHeader('Content-Type', 'application/json');
                
                if(q.pathname == "/reg" && req.method === "GET"){
                	
                	if(id !== undefined){
                		//list product
                	}else if(id > 0){
                		if(q.pathname == "/reg" && req.method === "GET"){
                      if(id === undefined){
                          //list product
                          let sql = "SELECT * FROM pelanggan";
                          db.query(sql,(err, result) => {
                              if (err) throw err;
                              
                              res.end(JSON.stringify(result));
                              
                          });
                      }else if(id > 0){
                          //get one product
                          let sql = "SELECT * FROM pelanggan where Id_Pelanggan = "+ id;
                          
                          db.query(sql,(err, result) => {
                              if (err) throw err;
                              
                              var product = result[0];
                              res.end(JSON.stringify(product));
                              
                          });
                      }
                      
                  }
                	}
                    
                }
                else if(q.pathname == "/reg" && req.method === "POST"){
                	//save product
                	
                }
                else if(q.pathname == "/reg" && req.method === "PUT"){
                	//update product    
                	
                }
                else if(q.pathname == "/reg" && req.method === "DELETE"){
                	//delete product    
                }
              
            }).listen(port);
            console.log('server is running on http://localhost:'+ port);
            

         