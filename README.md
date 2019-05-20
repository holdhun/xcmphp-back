# xcmphp
php framwork

Vision 1.3.1
不能使用composer

Vision 1.3.2
composer加载各种类

任意加载类

有任何问题欢迎发邮件2329237005@qq.com

框架数据库测试表admin 如下

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_pwd` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `admin` (`id`, `user_name`, `user_pwd`, `status`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 1);


ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

