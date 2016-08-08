## asyn mail
> 2016-08-08

*   实现用phpmailer达到异步发邮件的功能
*   基于开源项目[restyaboard](http://restya.com/board/install#dockerrestyaboard)
*   通过这样一个小项目学到了一些东西，包括但不限于docker、php、linux、nginx、vim，目前只涉及一些基础，放在[github](http://tokkiu.github.io/2016/07/22/hello-docker/)上

### 构建方法
*   确保已安装**docker**和**docker-compose**，并开启**docker service**
*   进去项目目录下，运行
    ```
    sudo docker-compose build
    ```
*   成功以后运行
    ```
    sudo docker-compose run --rm -p 1234:80 restyaboard
    ```
*   这时在浏览器下输入127.0.0.1:1234就会访问到登录页面，
    如果想直接以bash方式交互：(首先要得到restyaboard容器的id)
    ```
    sudo docker ps      
    sudo docker exec -it {containerID} bash
    ```
    就会进入到应用的**/usr/share/nginx/html/**目录下