# 面试题

---

#### 1. 设有一个数据库mydb中有一个表tb1，表中有六个字段，主键为ID，有十条记录，ID从0到9，以下代码输出结果是?  (   ) 

```php
<?php
$link = mysql_connect("localhost","mysql_user", "mysql_password")
        or die("Could not connect: " . mysql_error());
$result = mysql_query("SELECT id,name,age FROM mydb、tb1 where id < 5")
        or die("Could not query: ". mysql_error());
echo mysql_num_fields($result); 
mysql_close($link);
?>
```

答案：3  
解释：mysql_num_fields()返回结果集中字段的数目。

---

#### 2. 如下代码输出是()
```php
$a="hello";
$b= &$a;
unset($b);
$b="world";
echo $a;
```

答案：hello  
解释：\$b是一个指向\$a的引用，改变\$b的值会影响\$a，相当于\$a与\$b指向内存的同一块，但是变量有个机制，多个变量指向同一个地址，取消其中一个变量并不影响其他变量，也就是unset(\$b)不会影响到\$a。

---

#### 3. 以下代码运行结果是()
```php
<?php
 $str = "LAMP";
 $str1 = "LAMPBrother";
 $strc = strcmp($str,$str1);
 switch ($strc){
    case 1:
       echo"str > str1";
       break;
    case –1:
       echo"str < str1";
       break;
    case 0:
       echo"str=str1";
       break;
    default:
       echo"str <> str1";
 }
?>
```

答案：str < str1  
解释：首先要理解strmp（\$str1, \$str2）函数的意思，比较两个字符串的大小,比较时计算了两个字符串相差（不同）字符的个数一起作为返回
情况如下：

> 1、\$str1==str2   返回 0
> 2、\$str1 > str2   返回 1
> 3、\$str1 < str2   返回 -1

注意：对于第2、3种情况，上面列出的只是返回结果的符号而已，并不是最终的结果
          最终返回结果是：   所返回的符号乘上两个字符串相比不相同的字符个数

对于本题来说， \$str = "LAMP"; \$str1 = "LAMPBrother";
两个字符串不相同的字符有7个，且 \$str < \$str2，返回符号为 -1
所以最终返回的结果为 -7 （-1 * 7）

switch 条件判断case语句都没有匹配的，跳到default：所以执行  echo "str <> str1"; 

---

#### 4. 在PHP面向对象中，下面关于final修饰符描述错误的是（ ）
> A. 使用final标识的类不能被继承
> B. 在类中使用final标识的成员方法，在子类中不能被覆盖
> C. 不能使用final标识成员属性
> D. 使用final标识的成员属性，不能在子类中再次定义

答案：使用final标识的成员属性，不能在子类中再次定义  
解释：PHP中属性不能被定义为 final，只有类和方法才能被定义为 final。

---

#### 5. 阅读下面PHP代码，并选择输出结果(   ) 
```php
<?php 
    class A {
        public static $num=0;
        public function __construct(){
            self::$num++; }
    }
    new A();
    new A();
    new A();
    echo A::$num;
?>
```
答案：3  
解释：静态变量会常驻内存单元，直到程序结束才释放，当实例化A类时，静态变量早存在于内存，进行三次实例化时，\$num进行三次递增，故输出为3

---

#### 6. 如果在PHP中使用Oracle数据库作为数据库服务器，应该在PDO中加载下面哪个驱动程序？

> A. PDO_DBLIB
> B. PDO_MYSQL
> C. PDO_OCI
> D. PDO_ODBC

答案：PDO_OCI  
解释：PDO_OCI is a driver that implements the  PHP Data Objects (PDO) interface  to enable access from PHP to Oracle databases through the OCI library. 

---

#### 7. PDO通过执行SQL查询与数据库进行交互，可以分为多种不同的策略，使用哪一种方法取决于你要做什么操作。如果向数据库发送DML语句，下面哪种方式最合适?

答案：使用PDO对象中的exec()方法  
解释：PDO对象中的exec() 方法主要是针对没有结果集合返回的操作，比如 INSERT、UPDATE、DELETE 等操作，它返回的结果是当前操作影响的列数。

普及：  
> **DML（data manipulation language）：** 它们是SELECT、UPDATE、INSERT、DELETE，就象它的名字一样，这4条命令是用来对数据库里的数据进行操作的语言  
> **DDL（data definition language）：** DDL比DML要多，主要的命令有CREATE、ALTER、DROP等，DDL主要是用在定义或改变表（TABLE）的结构，数据类型，表之间的链接和约束等初始化工作上，他们大多在建立表时使用  
> **DCL（Data Control Language）：** 是数据库控制功能。是用来设置或更改数据库用户或角色权限的语句，包括（grant,deny,revoke等）语句。在默认状态下，只有sysadmin,dbcreator,db_owner或db_securityadmin等人员才有权力执行DCL 
