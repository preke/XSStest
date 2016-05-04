/*
 Navicat MySQL Backup

 Source Server         : MysqlCon
 Source Server Version : 50616
 Source Host           : localhost
 Source Database       : XSStest

 Target Server Version : 50616
 File Encoding         : utf-8

 Date: 05/04/2016 16:43:03 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `p_comment`
-- ----------------------------
DROP TABLE IF EXISTS `p_comment`;
CREATE TABLE `p_comment` (
  `comment` varchar(100) CHARACTER SET utf8 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `p_comment`
-- ----------------------------
BEGIN;
INSERT INTO `p_comment` VALUES ('123214', 'liu', '1'), ('sajdfl;jk', 'zhang', '2'), ('asdfdsa', 'askdjl', '3'), ('adsadfasdf', 'wang', '7'), ('safhjljdf', 'wends', '10'), ('<script src=\'http://localhost/XSS/hack.js\'>\r\n </script>', 'dsadsads', '11'), ('wishiasd\r\n<script src=\'http://localhost/XSS/hack.js\'>\r\n </script>', 'wen', '12'), ('&ltscript src=\'http://localhost/XSS/hack.js\'&gt\r\n &lt/script&gt', 'wqe', '13'), ('123', 'wen', '14'), ('asfdsa', 'jkljsf', '15'), ('asfdsa', 'jkljsf', '16');
COMMIT;

-- ----------------------------
--  Table structure for `p_user`
-- ----------------------------
DROP TABLE IF EXISTS `p_user`;
CREATE TABLE `p_user` (
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `p_user`
-- ----------------------------
BEGIN;
INSERT INTO `p_user` VALUES ('wen', '1', '123'), ('preke', '2', '123'), ('wnag', '3', '456');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
