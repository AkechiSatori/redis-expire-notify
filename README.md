## RedisNotify
#### 一个Redis的Key过期提醒类
---
1. 打开redis.conf
2. 将 ```notify-keyspace-events ""``` 改为 ```notify-keyspace-events "Ex"```
3. 重启redis进程
4. 运行 ```php demo.php```
5. 新建一个终端,运行redis-cli 输入 ```setex satori 5 some_text```
6. 切回到PHP终端,如果出现 ```Expired Key: satori``` 则代表过期回调成功

![examples][1]


  [1]: https://i.loli.net/2017/10/17/59e5b8f877b5c.png