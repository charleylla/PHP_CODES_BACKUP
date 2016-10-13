<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/11
 * Time: 17:56
 */

namespace Home\Controller;
use Think\Controller;
use Think\Page;
use Think\Verify;

class UserController extends Controller{
    public function greeting(){
        echo "Hi all ,I am charley!";
    }

    public function login2(){
        //1. 调用视图模板
        // display() 是父类中的方法
        // 如果不写参数，那么视图模板名和调用此方法的当前方法名一致
        //$this -> display();

        //2. 页面错误信息的可读性差
        // 可以设置tp框架的模式为开发模式，默认是生产模式
        // 在 index.html 中，define("APP_DEBUG",true);

        //3. 目录设置：在相应的VIEW中，根据控制器创建相应的文件夹，用来存放视图文件。

        //4.静态资源的路径：
        // 在相应的平台下面创建一个 PUBLIC 文件夹

        //5.不同的路由形式访问，结果不一样
        // 路径为相对于 index.html 的路径
        // 对于 get 请求，是 ok 的，对于 pathinfo 请求，不行
        // (NO) http://localhost/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/index.php/Home/Index/index
        // (YES)http://localhost/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/index.php
        // (YES)http://localhost/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop
        // (YES)http://localhost/PHP_ON_TYE_WAY/PHP_CODES_BACKUP/7_thinkPHP/shop/index.php?m=Home&c=Index&a=index

        // 使用相对路径引入 CSS 文件，会受到 pathinfo（路径） 的影响
        // 上面的 pathinfo 中，将 index.html 当做当前目录了，然后去找这些文件
        // 【在模板中引入 css 文件，最好不要使用相对路径，应该使用绝对路径，相对于虚拟主机的目录】

        // 引入 css 使用绝对路径
        // 在 css 文件中引入 img ，使用相对路径，相对于 css 文件寻找路径

        // 定义两个常量：CSS_PATH 和 IMG_PATH 用来替换模板文件中的路径，css 文件中图片的 url 不必变化，在拷贝的时候整体将 css 和 img 拷贝进来

        //6.引入模板：将视图文件拷贝进来，更改 css 路径和图片路径（相对于 css 文件的路径）

        //7.更好的方式：将路径设置为一个常量
        // <link rel="stylesheet" type="text/css" href="<? echo CSS_PATH ? >style.css" />

        //8.静态资源的存放原则：通过独立的路由可以访问

        //9.后台页面搭建
        // 后台也是 MVC 的组合

        //10.品字形页面搭建：使用 frame 引入
        // IndexController -> top/right/buttom/left/index -> index 方法将这些方法再拼在一起
        // 模板页面：View/Index/head.html left.html index.html ....
        // 相对路径的问题 frame 的 src 路径设置不要使用相对路径

        // 获取定义的常量
        //dump(get_defined_constants(true));

        //11.target 的属性值 -> 在什么页面显示超链接的内容
        // _self:本页面 |
        // _blank:新标签页面显示 |
        // _top:去除所有的 frameset 内容，进而显示 |
        // frame 的 src 属性值：在指定的 frame 页面显示 -> 当前页面中有一个 src 为 right 的 frame，那么将 a 的 target 设置为 right，就会在这个 frame 中显示相应的内容

        //12.TP框架配置文件的细节
        // A. ThinkPHP/Conf/convention.php -> 系统主要配置文件
        // B. shop/Common/Conf/Config.php -> 当前 shop 项目的配置文件 对于 shop 项目的全部分组都可以使用
        // C. shop/Home/Conf/config.php -> 当前 shop 项目 Home 分组的配置文件，只是 Home 分组可以使用

        //13.跟踪信息
        // SHOW_PAGE_TRACE -> 在相应的平台下设置，不要更改 TP 的源码
        // 上面的配置开启后会在页面的底部显示跟踪信息
        // 如果想在某个控制器中不显示跟踪信息：C("SHOW_PAGE_TRACE",false);

        //14.设置分组信息
        // http://localhost/shop/index.php/User/login -> 报错，没有设置分组信息，将 User 当做分组，login当做控制器了
        // 需要告诉 TP ，什么样的参数才是分组信息。
        // "MODULE_ALLOW_LIST" => array("Home","Admin"), -> 只有 Home 和 Admin 才是分组
        // 【需要设置 /shop/Common/Conf/config.php】 在具体的分组下面设置是不成功的

        //15.框架的两种模式
        // 开发和生产模式

        //16.开启 Smarty 模板引擎
        // "TMPL_ENGINE_TYPE" => "Think" -> 默认是 Think 的模板引擎
        // "TMPL_ENGINE_TYPE" => "Smarty" -> 设置为 Smarty 模板引擎
        // 使用 Smarty 来访问定义的常量，{$smarty.const.CSS_PATH}

        //17. Smarty 标记 {} 冲突
        // {} 可能和 css js 的相关标记有冲突
        // A.在 {} 中间设置空格
        // B.使得 {} 左右标记换行
        // C.设置 {literal} {/literal}
        // D.变换 Smarty 标记符号
        // E.外部引入 css js 文件

        //18.数据库配置
        // 不要在 TP 框架中修改配置文件，在 /shop/Common/conf/config.php 下修改

        //19.Model 类创建的原则
        // 原则：【一个数据表对应一个 Model 模型类】
        // 创建一个 message 表的模型类
        // MessageModel.class.php

        //20.在控制器中使用 Model
        // 使用对应的 Model 类，$model = new \Model\MessageModel();
        // 需要使用这种方式来创建类
        // 在控制器中实例化 Model 需要使用相应的命名空间
        // 根据模型的命名来操作相应的表

        //21.实例化没有前缀的表 Mode 对象
        // 如果数据库中有些表没有前缀，我们想创建这些 Model 的对象，怎么做呢。
        // 在对应的模型类中使用： protected $trueTableName = "[真实的表名]";
        // $model = new \Model\TrueModelName();

        //22.两种方式实例化 Model 对象
        // A. $model = new \Model\TrueModelName(); -> 可以调用父类的方法和自身的方法
        // B. 实例化基类对象 $obj = D(); -> D 函数用来实例化 Model 基类对象 -> 此对象没有和具体的数据表进行关联
        // 可以用来执行原生的 sql 语句
        // $model = D("Message"); -> 实例化的 Model 基类对象，操作的是 ch_message 表
        // 此种方式允许我们不创建对应数据表的模型类，也可以对该表进行操作。
        // 如果数据表没有特殊方法的要求，可以使用这种方式

        //23.数据基本操作
        // 查询 返回的均是一个二维数组信息
        // $model -> select();          返回全部信息
        // $model -> select(主键id);     根据主键查询记录
        // $model -> select("");
        // 使用 Smarty 的一个例子
        /*
         * {foreach $msg as $key => $value}
                <div>
                    <span>{$value@index}</span>
                    <span>{$value["name"]}</span>
                    <span>{$value["age"]}</span>
                    <span>{$value["address"]}</span>
                </div>
            {/foreach}
         *
         */

        //24.查询条件
        // $model -> where("name link 'c%'");
        // $model -> select();
        // 将条件都写好后，再 select() 执行查询操作
        // $model -> limit([偏移量],长度); -> 限制查询条数
        // $model -> field("f1,f2.."); -> 限制查询字段
        // $model -> order("name desc"); -> 根据某个字段进行排序
        // $model -> group(); -> 分组查询
        // $model -> group("goods_brand_id");
        // $model -> field("goods_brand_id,count(*)");
        // $model -> select();
        // select goods_brand_id,avg(goods_price) from goods group by goods_brand_id;
        // 复杂的查询语句最好自己写

        // where -> 必须是数据表中存在的字段
        // having -> 必须是结果集中存在的字段
        // 有时候两者会有交集

        //25.连贯操作
        // 上面各查询方法在使用时，没有具体的顺序要求，可以使用链式调用
        // $model ->where() -> order() -> field() -> select();

        //26.添加数据的方式
        // $model -> add();
        // A.数组方式
        // B.AR方式

        //27.数据修改操作
        // A.数组方式
        // B.AR方式
        // 注意：数据修改必须设置条件，主键 id 或者 where 方法，否则执行失败
        // $res = $model -> where("goods_id > 60") -> save();
        // save() 方法返回受影响记录的条数

        //28.后台实现增删改查逻辑
        /**
         *  function add_goods(){
         *      $goods = D("Goods");
         *      if(!empty($_POST)){
         *          $z = $goods -> add($_POST);
         *          if($z){
         *              $this -> redirect("showList",array(),2,"数据添加成功");
         *          }else{
         *              $this -> redirect("add_goods",array(),2,"数据添加失败");
         *          }
         *      }else{
         *          $this -> display();
         *      }
         *  }
         *
         *  添加商品是，$_POST 数据就是当前控制器下 add_goods 行为对应的视图中的数据，如果这个数据为空，那么
         *  仍然显示该控制器的视图。如果不为空并且合法，那么像数据库中写入新的商品信息，并重定向到 showList 页面。
         *  showList 页面中已经进行了查询，新添加的数据也会在视图中进行展示。
         *
         *  重定向的参数：
         *  不写参数，跳转成功后的链接：
         *      http://localhost/shop/index.php/Goods/showList
         *  添加参数：
         *      $this -> redirect("showList",array("name" => "charley","age" => 22),2,"数据添加成功");
         *  跳转后的链接：
         *      http://localhost/shop/index.php/Goods/showList/name/charley/age/22.html
         *
         *  所谓的 URL，并不是和服务器中的文件一一对应的。。。。
         */

        //29.修改操作：get 参数的传递和接受
        // pathinfo 的传值方式：
        // http://localhost/shop/index.php/Goods/update/id/2301212/name/皮大衣
        // <td><a href = "{$smarty.const.__CONTROLLER__}/upd/goods_id/{$value['goods_id']}">修改</a></td>
        // 【 ↑ 重要】
        // 【 ↓ 重要】
        // 接受 get 参数
        /**
         *  function update($goods_id,$name){
         *      //dump($_GET);// 可以直接使用 $_GET 表示以 get 方式传递到当前页面的参数
         *      // 蛋四，我们使用了框架，就最好不要用这些底层的东西了
         *      // 将参数写在对应 action 的形参中
         *      dump($goods_id);
         *      // 这些参数在请求的时候是必须要传递的，如果不传递将会报错
         *  }
         *
         *  修改成功后跳转到本身页面。
         *  修改表单后向自身提交：
         *  form action = "{$smarty.const__SELF__}"
         *  为啥要提交到本页面而不是ACTION？本页面中是特定某一个上商品的信息
         *
         *  修改操作：
         *  根据传过来的 id 获取到相应的行，然后将信息写入表单中。
         *  修改按钮，提交到自身
         *  提交到 ACTION ： http://localhost/shop/index.php/User/update
         *  提交到 SELF ：http://localhost/shop/index.php/User/update/name/charley\
         *
         *  数据添加时，ACTION 和 SELF 是一样的，但是数据修改时不一样，因为每一个具体的商品在修改时都对应唯一的 pathinfo
         *  如果使用 ACTION，则http://localhost/shop/index.php/User/update，并没有传递参数过来，因此会执行失败
         *  使用 SELF 的话，还是走的 update 控制器，但是传入了对应的形参。
         *
         *  update 方法中的数据逻辑：两个 -> 展示和修改（收集）
         *      处理：if(!empty($_POST)) -> 收集
         *            else  -> 展示
         *      和 add 方法的处理逻辑一致
         *
         *     public function update($name){
                    $model = D("Message");
                    if(!empty($_POST)){
                        $res = $model -> save($_POST);
                    if($res){
                        $this -> redirect("showUser",array(),2,"修改成功！");
                    }else{
                        $this -> redirect("update",array("name"=>$name),2,"修改失败！");
                    }
                    }else{
                        $res = $model -> where("name like '{$name}%'") ->select();
                        dump($res);
                        $this -> assign("info",$res[0]);
                        $this -> display();
                    }
                }
         *
         */

        //30.删除操作
        // 在进行删除的时候，是进行逻辑删除，而不是物理删除
        // 逻辑删除：比如，某个字段设置为1，显示，设置为0，隐藏

        //31.执行原生 sql 语句
        // 查询：$model -> query("select * from ch_message where name like '赵%'"); -> 返回一个二维数组结果
        // 增删改： $model -> execute($sql); -> 返回受影响的条数

        //32.表单自动验证
        // TP 的表单验证是服务器端的验证，页面会刷新。。。
        // 往 __SELF__ 提交

        //33.命名空间
        // PHP 语法规定，在同一次 HTTP 请求中，相同的函数名称，类名，常量不能出现多次，但是如果有这种需求的话，就可以使用命名空间
        // 命名空间对 函数，类名，const 常量 起作用。成为元素
        // define() 常量不受命名空间影响， const 常量会
        // 默认情况下采用就近原则
        // 访问其他空间中的内容
        // \namespace\getInfo();

        //34.验证码
        // Verify 类
        // 可选是否使用中文验证码
        // 我们这里在 UserController 中的 login 方法中使用验证码工具
        // A. 实例化 Verify 对象
        // B. 调用 entry 方法
        // 此时请求： http://localhost/shop/index.php/User/verifyImg 就可以看到相应的验证码
        // C. 可以对验证码进行配置

        /**
         *  public function verifyImg(){
         *      $very_cfg = array(
                    // 宽高 需要个表单中的保持一致~
                    "imageH" => 45,
                    "imageW" => 150,
                    // 位数
                    "length" => 5,
                    // 字体
                    "fontSize" => 18,
                    // 使用中文
                    //            "useZh" => true,
                    // 设置字体
                    //            "fontttf" => "6.ttf",
                    );
                    //        $very = new \Think\Verify();
                    // 初始化的时候传入配置参数即可
                    $very = new Verify($very_cfg); // 自动为我们导包了 编译器的功能
                    $very -> entry();
            }
         *
         */
        //前端 js 写法
        /**
         *  onclick="this.src='{$smarty.const.__CONTROLLER__}/verifyImg/'+Math.random()"
         */

        //35.验证码的问题：打开 firebug 不同步
        // 上面显示的验证码和网络中获取到的验证码不一样
        // 输入页面上的验证码不对，需要输入下方新获取的验证码
        // 这是因为打开 firebug 的时候，发送了一次请求，如果不打开 firebug ，则不会发出请求

        //36.验证码校验
        // A. 初始化 Verify 对象 $ver = new Verify();
        // B. 调用 check 方法，传入相应的参数。 $ver -> check($_POST["capcha]);

        //37.附件上传
        // 关键属性： <form enctype="multipart/form-data"></form>
        // Upload 类
        // 先获取 $_FILES，如果 $_FILES 中对应的文件的 error 为0，则执行上传操作 -> 初始化一个对象
        // $up = new Upload();
        // $z = $up -> uploadOne($_FILES["good_name"]); -> 返回上传附件的存储的路径等信息
        // 如果出错，使用 $up -> getError(); 打印
        // 同初始化验证码实例一样，可以进行配置。

        //38.上传成功后，将信息保存到数据库中
        // $imgName = $up -> rootPath.$z["savepath"].$z["savename"]; -> $up 实例中并没有 rootPath 这一个属性
        // 【因此会返回 config 中的 rootPath 信息~】
        // $_POST["img_path"] = $img_path;
        // $model -> create() -> 收集表单信息
        // $model -> add($model -> create());

        //39.缩略图
        // 原理：管求你的。
        // 打开：imagecreatefromjpeg() imagecreatefrompng() ...
        // 创建（白板）：imagecreatetruecolor()
        // 进行缩放处理：imagecopyresampled()

        //40.给上传好的图片制作缩略图
        // A. 实例化 Image 对象 $img = new Image();
        // B. 打开被处理的图片 $img -> open($imgName);
        // C. 制作缩略图 $img -> thumb(125,125); -> 默认有自适应效果
        // D. 把缩略图保存到服务器 $thumb_path = $up -> rootPath.$z["savepath"]."small_".$z["savename"]
        // $img -> save($thumb_path);
        // E. 将缩略图信息保存到数据库中，同 38

        //41.在模板中显示图片
        // 使用绝对路径

        //42.分页
        // Page 类
        // 命名空间在 TP 中的作用：将命名空间转换成相应的目录信息，进而找到相应的类
        /**
         *   public function showUser(){
                $model = D("Message");
                // 获取分页信息，包括总的条数和每页的条数
                $total = $model -> count();
                $per = 2;
                // 创建page对象
                $page = new Page($total,$per);
                // 拼装 SQL 语句，执行查询
                // 要使用到limit语句，格式如下
                $sql = "select * from ch_message limit {$page ->firstRow},{$page -> listRows}";
                $userinfo = $model -> query($sql);
                // 获取页码列表
                $pageList = $page -> show();
                // 可传入参数控制外观
                // 分配列表
                $this -> assign("userinfo",$userinfo);
                $this -> assign("pageList",$pageList);

                $this -> display();
            }
         */

        //43.登录
        // A. 验证验证码
        // B. 验证用户名 密码
        // C. 用户信息写入 session -> 存入 【 名字 和 id 】
        // session("admin_id",$check_info["id"]);
        // session("admin_name",$check_info["name"]);
        // TP 将 session 和 cookie 封装成了具体的函数
        // D. 页面跳转

        //44.退出系统 -> session(null);

        //45.RBAC
        // role base access control -> 基于角色的用户访问权限控制
        // 不同的人员登录，显示不同的登录模块
        // 用户 --> 组--> 权限

        //46.流程
        // A. 设计数据表
        // 管理员表 权限表 角色表


    }

    public function login(){
        // 两个逻辑，展示表单，搜集表单
        if(!empty($_POST)){
            dump($_POST);
            // 校验
            $very_code = new Verify();
            if($very_code -> check($_POST["capcha"])){
                $this ->redirect("showUser",array(),1,"校验成功！");
            }else{
                $this ->redirect("login",array(),1,"校验失败！！");
            }
        }else{
            $this -> display();
        }
    }
    // 使用验证码
    public function verifyImg(){
        $very_cfg = array(
            // 宽高 需要个表单中的保持一致~
            "imageH" => 45,
            "imageW" => 150,
            // 位数
            "length" => 3,
            // 字体
            "fontSize" => 18,
            // 使用中文
//            "useZh" => true,
            // 设置字体
//            "fontttf" => "6.ttf",
        );
//        $very = new \Think\Verify();
        // 初始化的时候传入配置参数即可
        $very = new Verify($very_cfg); // 自动为我们导包了 编译器的功能
        $very -> entry();
    }

    public function reg(){
        $this -> display();
        $model = new \Model\MessageModel();
        dump($model);
    }

    public function showUser(){
        $model = D("Message");
        // 获取分页信息，包括总的条数和每页的条数
        $total = $model -> count();
        $per = 2;
        // 创建page对象
        $page = new Page($total,$per);
        // 拼装 SQL 语句，执行查询
        // 要使用到limit语句，格式如下
        $sql = "select * from ch_message limit {$page ->firstRow},{$page -> listRows}";
        $userinfo = $model -> query($sql);
        // 获取页码列表
        $pageList = $page -> show();
        // 可传入参数控制外观
        // 分配列表
        $this -> assign("userinfo",$userinfo);
        $this -> assign("pageList",$pageList);

        $this -> display();
    }

    public function update($name){
        $model = D("Message");
        if(!empty($_POST)){
            $res = $model -> save($_POST);
            if($res){
                $this -> redirect("showUser",array(),2,"修改成功！");
            }else{
                $this -> redirect("update",array("name"=>$name),2,"修改失败！");
            }
        }else{
            $res = $model -> where("name like '{$name}%'") ->select();
            dump($res);
            $this -> assign("info",$res[0]);
            $this -> display();
        }
    }

    public function model_test($goods_id,$name){
//        $model = new \Model\NoPrefixTbl();
//        $model = D();
//        $model = D("Message");
//        $msg = $model -> select();
//        $this -> assign("msg",$msg);
//        $this -> display();
//        dump($msg);
//        dump($model -> select(2));
//        dump($model -> select("0,2"));

//        $model -> where("name like 'c%'");
//        dump($model -> select());
//        dump($_GET);
        dump($goods_id);
        dump($name);
    }
}