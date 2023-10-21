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
                		//get 1 product
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
            