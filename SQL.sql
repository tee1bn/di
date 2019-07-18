-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 10:10 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `di_capmus_cash`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Super', 'admin@admin.com', '08123353738', '$2y$10$OepumDQQsOJw/kZBnXAf7.48lf5sP9IibKoMdubhuxTle8XNQ5HWS', '2018-02-22 23:00:00', '2019-03-26 22:51:35'),
(2, NULL, 'Jigloa', 'James ', 'tee02bn@gmail.com', '08123351819', '$2y$10$Tt8Xj8ZAqk7sMAu1cbqWtOZS6rgL8wG.w.OOiU74hRmpTZdCaSLQ6', '2018-02-28 10:26:56', '2018-03-16 16:32:59');

-- --------------------------------------------------------

--
-- Table structure for table `broadcast`
--

CREATE TABLE `broadcast` (
  `id` bigint(20) NOT NULL,
  `broadcast_message` varchar(255) NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '1=published, 0=paused',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers_support`
--

CREATE TABLE `customers_support` (
  `id` bigint(20) NOT NULL,
  `ticket_id` bigint(20) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_sms_notification`
--

CREATE TABLE `email_sms_notification` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `phone_message` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone_status` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_status` int(11) DEFAULT NULL,
  `email_message` longtext,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_sms_notification`
--

INSERT INTO `email_sms_notification` (`id`, `user_id`, `phone_message`, `phone`, `phone_status`, `email`, `email_status`, `email_message`, `created_at`, `updated_at`) VALUES
(1, 26, 'Your GH #1 has been matched', '08065839410', NULL, 'chimua12@gmail.com', NULL, '\r\n<!doctype html>\r\n <html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n <head>\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n  <meta name=\"viewport\" content=\"initial-scale=1.0\" />\r\n  <meta name=\"format-detection\" content=\"telephone=no\" />\r\n  <title></title>\r\n  <style type=\"text/css\">\r\n  body {\r\n    width: 100%;\r\n    margin: 0;\r\n    padding: 0;\r\n    -webkit-font-smoothing: antialiased;\r\n  }\r\n  @media only screen and (max-width: 600px) {\r\n    table[class=\"table-row\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n      padding-left: 20px !important;\r\n      padding-right: 20px !important;\r\n    }\r\n    table[class=\"table-row-fixed\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n    }\r\n    table[class=\"table-col\"], table[class=\"table-col-border\"] {\r\n      float: none !important;\r\n      width: 100% !important;\r\n      padding-left: 0 !important;\r\n      padding-right: 0 !important;\r\n      table-layout: fixed;\r\n    }\r\n    td[class=\"table-col-td\"] {\r\n      width: 100% !important;\r\n    }\r\n    table[class=\"table-col-border\"] + table[class=\"table-col-border\"] {\r\n      padding-top: 12px;\r\n      margin-top: 12px;\r\n      border-top: 1px solid #E8E8E8;\r\n    }\r\n    table[class=\"table-col\"] + table[class=\"table-col\"] {\r\n      margin-top: 15px;\r\n    }\r\n    td[class=\"table-row-td\"] {\r\n      padding-left: 0 !important;\r\n      padding-right: 0 !important;\r\n    }\r\n    table[class=\"navbar-row\"] , td[class=\"navbar-row-td\"] {\r\n      width: 100% !important;\r\n    }\r\n    img {\r\n      max-width: 100% !important;\r\n      display: inline !important;\r\n    }\r\n    img[class=\"pull-right\"] {\r\n      float: right;\r\n      margin-left: 11px;\r\n            max-width: 125px !important;\r\n      padding-bottom: 0 !important;\r\n    }\r\n    img[class=\"pull-left\"] {\r\n      float: left;\r\n      margin-right: 11px;\r\n      max-width: 125px !important;\r\n      padding-bottom: 0 !important;\r\n    }\r\n    table[class=\"table-space\"], table[class=\"header-row\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n    }\r\n    td[class=\"header-row-td\"] {\r\n      width: 100% !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 480px) {\r\n    table[class=\"table-row\"] {\r\n      padding-left: 16px !important;\r\n      padding-right: 16px !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 320px) {\r\n    table[class=\"table-row\"] {\r\n      padding-left: 12px !important;\r\n      padding-right: 12px !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 458px) {\r\n    td[class=\"table-td-wrap\"] {\r\n      width: 100% !important;\r\n    }\r\n  }\r\n  </style>\r\n </head>\r\n\r\n  <br>\r\n  <br>\r\n  <center>\r\n    <img src=\"http://localhost/di/template/default/assets/images/branding/dove7.png\" style=\"height: 100px;\">\r\n  </center>\r\n\r\n <body style=\"font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;\" bgcolor=\"#E4E6E9\" leftmargin=\"0\" topmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\r\n <table width=\"100%\" height=\"100%\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n <tr><td width=\"100%\" align=\"center\" valign=\"top\" bgcolor=\"#E4E6E9\" style=\"background-color:#E4E6E9; min-height: 200px;\">\r\n<table><tr><td class=\"table-td-wrap\" align=\"center\" width=\"458\"><table class=\"table-space\" height=\"18\" style=\"height: 18px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"18\" style=\"height: 18px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"8\" style=\"height: 8px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"8\" style=\"height: 8px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n\r\n<table class=\"table-row\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;\" valign=\"top\" align=\"left\">\r\n  <table class=\"table-col\" align=\"left\" width=\"378\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"378\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;\" valign=\"top\" align=\"left\">\r\n    <table class=\"header-row\" width=\"378\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"header-row-td\" width=\"378\" style=\"font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;\" valign=\"top\" align=\"left\">\r\n\r\n\r\n      <span style=\"text-transform: capitalize; color: #203864\">Anthonia Nwosu</span>! Thank you for Requesting Help!</td></tr></tbody></table>\r\n\r\n\r\n    <div style=\"font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;\">\r\n      <b style=\"color: #777777;\">Your GH #1 has been match to receive \r\n        <b>R</b>1,500.00 from \r\n      Linda Jmon. </b>\r\n      <br>\r\n      Please see dashboard for more details. \r\n      <br>\r\n      <br>\r\n       <a href=\"http://localhost/di/login\" style=\"color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; padding: 9px 9px; font-size: 15px; line-height: 21px; background-color: #32c89a;\">&nbsp; Go to Dashboard &nbsp;</a>\r\n       <br>\r\n       <br>\r\n    </div>\r\n\r\n  </td></tr></tbody></table>\r\n</td></tr></tbody></table>\r\n    \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<table class=\"table-space\" height=\"6\" style=\"height: 6px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"6\" style=\"height: 6px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n\r\n<table class=\"table-row-fixed\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-fixed-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;\" valign=\"top\" align=\"left\">\r\n  <table class=\"table-col\" align=\"left\" width=\"448\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"448\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;\" valign=\"top\" align=\"left\">\r\n    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td width=\"100%\" align=\"center\" bgcolor=\"#f5f5f5\" style=\"font-family: Arial, sans-serif; line-height: 24px; color: #bbbbbb; font-size: 13px; font-weight: normal; text-align: center; padding: 9px; border-width: 1px 0px 0px; border-style: solid; border-color: #e3e3e3; background-color: #f5f5f5;\" valign=\"top\">\r\n      <a href=\"http://localhost/di\" style=\"color: #203864; text-decoration: none; background-color: transparent;\">\r\n        &copy; 2019        Campus Cash \r\n        </a>\r\n      <br>\r\n      <!-- <a href=\"#\" style=\"color: #478fca; text-decoration: none; background-color: transparent;\">twitter</a> -->\r\n      .\r\n      <!-- <a href=\"#\" style=\"color: #5b7a91; text-decoration: none; background-color: transparent;\">facebook</a> -->\r\n      .\r\n      <!-- <a href=\"#\" style=\"color: #dd5a43; text-decoration: none; background-color: transparent;\">google+</a> -->\r\n    </td></tr></tbody></table>\r\n  </td></tr></tbody></table>\r\n</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"1\" style=\"height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"1\" style=\"height: 1px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"36\" style=\"height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"36\" style=\"height: 36px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></table></td></tr></table>\r\n</td></tr>\r\n </table>\r\n </body>\r\n </html>\r\n <div style=\"display: none;\">\r\n    <script>\r\n      function ConfirmationDialog($request) {\r\n        this.$request = $request;\r\n\r\n        this.open_dialog = function() {\r\n          $(\'#confirmation_dialog\').modal(\'show\');\r\n        }\r\n\r\n        this.open_dialog();\r\n\r\n        this.confirm = function(){\r\n          window.location.href = this.$request;\r\n        } \r\n\r\n      }\r\n    </script>\r\n\r\n<!-- Modal -->\r\n<div id=\"confirmation_dialog\" data-backdrop=\"static\" class=\"modal fade\" role=\"dialog\">\r\n  <div class=\"modal-dialog\" style=\"display: block;\">\r\n\r\n    <!-- Modal content-->\r\n    <div class=\"modal-content\">\r\n      <div class=\"modal-header\">\r\n        <h4 class=\"modal-title\">Confirmation </h4>\r\n      </div>\r\n      <center class=\"modal-body\">\r\n        <h2>Are you sure You want to continue? </h2>\r\n      </center>\r\n      <div class=\"modal-footer\">\r\n        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">\r\n         No\r\n        </button>\r\n         <button type=\"button\" class=\"btn btn-success\" onclick=\"$confirm_dialog.confirm();\">\r\n          Yes\r\n        </button>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</div>\r\n\r\n\r\n<style>\r\n  #gitstar-notification{\r\n    position: fixed;\r\n    top: 10px;\r\n    z-index: 99999999999999;\r\n    width:400px;\r\n    margin-left: -200px;\r\n    left: 50%;\r\n   display: none;\r\n}\r\n</style>\r\n\r\n<center class=\"text-center wrapper\">  \r\n  <div id=\"gitstar-notification\"  class=\"alert alert-info alert-dismissible\" >\r\n    <a href=\"javascript:void;\" class=\"close\" onclick=\"document.getElementById(\'gitstar-notification\').style.display=\'none\'\">&times;</a>\r\n        <!-- <strong><i class=\'fa fa-bell pull-left\'> </i></strong>  -->\r\n  \r\n  <span id=\"error_note\"> </span>    \r\n  </div>\r\n</center>\r\n\r\n\r\n\r\n\r\n\r\n  <script>\r\n\r\n    perform_automated_process = function() {\r\n\r\n    $.ajax({\r\n              type: \"POST\",\r\n              url: \'http://localhost/di\'+\"/auto-match/\",\r\n              cache: false,\r\n              success: function(data) {\r\n\r\n              },\r\n              error: function (data) {\r\n                   //alert(\"fail\"+data);\r\n              }\r\n          });\r\n      }\r\n\r\n\r\n      perform_automated_process();\r\n\r\n    notify = function () {\r\n  $.ajax({\r\n            type: \"POST\",\r\n            url: \'http://localhost/di\'+\"/home/flash_notification/\",\r\n            cache: false,\r\n            success: function(data) {\r\n\r\n\r\n        let $error_note = \'\';\r\n        let $error_type = \'\';\r\n        for (var i = 0; i < data.length; i++) {\r\n          $error_note += data[i][\'message\'] +\'<br>\';\r\n          $error_type = data[i][\'title\'] ;\r\n\r\n        }\r\n\r\n        if ($error_note != \'\') {\r\n\r\n          show_notification($error_note, $error_type);\r\n        }\r\n\r\n\r\n\r\n\r\n            },\r\n            error: function (data) {\r\n                 //alert(\"fail\"+data);\r\n            }\r\n\r\n            \r\n\r\n        });\r\n\r\n    }\r\n\r\n\r\nshow_notification = function ($notification, $error_type=\'info\') {\r\n$(\'#error_note\').html($notification);\r\n    $(\'#gitstar-notification\').css(\'display\', \'block\');\r\n    document.getElementById(\'gitstar-notification\').setAttribute(\"class\",\"alert alert-\"+$error_type+\" alert-dismissible\");\r\n  }\r\n\r\nnotify();\r\n\r\n\r\n\r\n$(document).ready(function(){\r\n $(\"body\").on(\"submit\", \"#newsletter_form\", function (e) {\r\n  e.preventDefault();\r\n\r\n  $datastring = $(\'#newsletter_form\').serialize();\r\n\r\n  $.ajax({\r\n\r\n            type: \"POST\",\r\n            url: \'http://localhost/di\'+\"/contact/add_to_news_letter/\",\r\n            data: $datastring,\r\n            cache: false,\r\n            success: function(data) {\r\n\r\n    show_notification(data);\r\n\r\n            },\r\n            error: function (data) {\r\n                 //alert(\"fail\"+data);\r\n            },\r\n\r\n\r\n\r\n        });\r\n\r\n  \r\n});\r\n});\r\n    \r\n  </script>\r\n\r\n  \r\n<script>\r\n  add_to_new_letters = function ($input) {\r\n    // console.log($input);\r\n       var form_data = new FormData();\r\n\r\n    form_data.append(\"newsletter\" , $input.value);\r\n\r\n     $.ajax({\r\n           type: \"POST\",\r\n           url: \'http://localhost/di/home/add_to_new_letters\',\r\n           data: form_data, // \r\n           contentType: false,\r\n           cache:false,\r\n           processData:false,\r\n           success: function(data)\r\n           {\r\n            notify();\r\n            console.log(data);\r\n           }\r\n         });\r\n\r\n\r\n  }\r\n</script> \r\n\r\n<script type=\"text/javascript\">\r\n  \r\nfunction copy_text($text) {\r\n  var copyText = document.createElement(\'input\');\r\n   copyText.setAttribute(\'readonly\', \'\');\r\n   copyText.style = {position: \'absolute\', left: \'-9999px\'};\r\n         document.body.appendChild(copyText);\r\n      copyText.value = $text;\r\n      copyText.select();\r\n    (  document.execCommand(\"copy\"));\r\n    // Remove temporary element\r\n   document.body.removeChild(copyText);\r\n   show_notification(\"Linked Copied \"+ $text, \"success\");\r\n   }\r\n\r\n\r\n\r\n\r\n</script>\r\n\r\n\r\n\r\n\r\n\r\n', '2019-07-18 08:51:57', '2019-07-18 08:51:57'),
(2, 26, 'Your GH #1 has been matched --Campus Cash', '08065839410', NULL, 'chimua12@gmail.com', NULL, '\r\n<!doctype html>\r\n <html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n <head>\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n  <meta name=\"viewport\" content=\"initial-scale=1.0\" />\r\n  <meta name=\"format-detection\" content=\"telephone=no\" />\r\n  <title></title>\r\n  <style type=\"text/css\">\r\n  body {\r\n    width: 100%;\r\n    margin: 0;\r\n    padding: 0;\r\n    -webkit-font-smoothing: antialiased;\r\n  }\r\n  @media only screen and (max-width: 600px) {\r\n    table[class=\"table-row\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n      padding-left: 20px !important;\r\n      padding-right: 20px !important;\r\n    }\r\n    table[class=\"table-row-fixed\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n    }\r\n    table[class=\"table-col\"], table[class=\"table-col-border\"] {\r\n      float: none !important;\r\n      width: 100% !important;\r\n      padding-left: 0 !important;\r\n      padding-right: 0 !important;\r\n      table-layout: fixed;\r\n    }\r\n    td[class=\"table-col-td\"] {\r\n      width: 100% !important;\r\n    }\r\n    table[class=\"table-col-border\"] + table[class=\"table-col-border\"] {\r\n      padding-top: 12px;\r\n      margin-top: 12px;\r\n      border-top: 1px solid #E8E8E8;\r\n    }\r\n    table[class=\"table-col\"] + table[class=\"table-col\"] {\r\n      margin-top: 15px;\r\n    }\r\n    td[class=\"table-row-td\"] {\r\n      padding-left: 0 !important;\r\n      padding-right: 0 !important;\r\n    }\r\n    table[class=\"navbar-row\"] , td[class=\"navbar-row-td\"] {\r\n      width: 100% !important;\r\n    }\r\n    img {\r\n      max-width: 100% !important;\r\n      display: inline !important;\r\n    }\r\n    img[class=\"pull-right\"] {\r\n      float: right;\r\n      margin-left: 11px;\r\n            max-width: 125px !important;\r\n      padding-bottom: 0 !important;\r\n    }\r\n    img[class=\"pull-left\"] {\r\n      float: left;\r\n      margin-right: 11px;\r\n      max-width: 125px !important;\r\n      padding-bottom: 0 !important;\r\n    }\r\n    table[class=\"table-space\"], table[class=\"header-row\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n    }\r\n    td[class=\"header-row-td\"] {\r\n      width: 100% !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 480px) {\r\n    table[class=\"table-row\"] {\r\n      padding-left: 16px !important;\r\n      padding-right: 16px !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 320px) {\r\n    table[class=\"table-row\"] {\r\n      padding-left: 12px !important;\r\n      padding-right: 12px !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 458px) {\r\n    td[class=\"table-td-wrap\"] {\r\n      width: 100% !important;\r\n    }\r\n  }\r\n  </style>\r\n </head>\r\n\r\n  <br>\r\n  <br>\r\n  <center>\r\n    <img src=\"http://localhost/di/template/default/assets/images/branding/dove7.png\" style=\"height: 100px;\">\r\n  </center>\r\n\r\n <body style=\"font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;\" bgcolor=\"#E4E6E9\" leftmargin=\"0\" topmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\r\n <table width=\"100%\" height=\"100%\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n <tr><td width=\"100%\" align=\"center\" valign=\"top\" bgcolor=\"#E4E6E9\" style=\"background-color:#E4E6E9; min-height: 200px;\">\r\n<table><tr><td class=\"table-td-wrap\" align=\"center\" width=\"458\"><table class=\"table-space\" height=\"18\" style=\"height: 18px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"18\" style=\"height: 18px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"8\" style=\"height: 8px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"8\" style=\"height: 8px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n\r\n<table class=\"table-row\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;\" valign=\"top\" align=\"left\">\r\n  <table class=\"table-col\" align=\"left\" width=\"378\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"378\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;\" valign=\"top\" align=\"left\">\r\n    <table class=\"header-row\" width=\"378\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"header-row-td\" width=\"378\" style=\"font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;\" valign=\"top\" align=\"left\">\r\n\r\n\r\n      <span style=\"text-transform: capitalize; color: #203864\">Anthonia Nwosu</span>! Thank you for Requesting Help!</td></tr></tbody></table>\r\n\r\n\r\n    <div style=\"font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;\">\r\n      <b style=\"color: #777777;\">Your GH #1 has been match to receive \r\n        <b>R</b>1,500.00 from \r\n      Linda Jmon. </b>\r\n      <br>\r\n      Please see dashboard for more details. \r\n      <br>\r\n      <br>\r\n       <a href=\"http://localhost/di/login\" style=\"color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; padding: 9px 9px; font-size: 15px; line-height: 21px; background-color: #32c89a;\">&nbsp; Go to Dashboard &nbsp;</a>\r\n       <br>\r\n       <br>\r\n    </div>\r\n\r\n  </td></tr></tbody></table>\r\n</td></tr></tbody></table>\r\n    \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<table class=\"table-space\" height=\"6\" style=\"height: 6px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"6\" style=\"height: 6px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n\r\n<table class=\"table-row-fixed\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-fixed-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;\" valign=\"top\" align=\"left\">\r\n  <table class=\"table-col\" align=\"left\" width=\"448\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"448\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;\" valign=\"top\" align=\"left\">\r\n    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td width=\"100%\" align=\"center\" bgcolor=\"#f5f5f5\" style=\"font-family: Arial, sans-serif; line-height: 24px; color: #bbbbbb; font-size: 13px; font-weight: normal; text-align: center; padding: 9px; border-width: 1px 0px 0px; border-style: solid; border-color: #e3e3e3; background-color: #f5f5f5;\" valign=\"top\">\r\n      <a href=\"http://localhost/di\" style=\"color: #203864; text-decoration: none; background-color: transparent;\">\r\n        &copy; 2019        Campus Cash \r\n        </a>\r\n      <br>\r\n      <!-- <a href=\"#\" style=\"color: #478fca; text-decoration: none; background-color: transparent;\">twitter</a> -->\r\n      .\r\n      <!-- <a href=\"#\" style=\"color: #5b7a91; text-decoration: none; background-color: transparent;\">facebook</a> -->\r\n      .\r\n      <!-- <a href=\"#\" style=\"color: #dd5a43; text-decoration: none; background-color: transparent;\">google+</a> -->\r\n    </td></tr></tbody></table>\r\n  </td></tr></tbody></table>\r\n</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"1\" style=\"height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"1\" style=\"height: 1px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"36\" style=\"height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"36\" style=\"height: 36px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></table></td></tr></table>\r\n</td></tr>\r\n </table>\r\n </body>\r\n </html>\r\n <div style=\"display: none;\">\r\n    <script>\r\n      function ConfirmationDialog($request) {\r\n        this.$request = $request;\r\n\r\n        this.open_dialog = function() {\r\n          $(\'#confirmation_dialog\').modal(\'show\');\r\n        }\r\n\r\n        this.open_dialog();\r\n\r\n        this.confirm = function(){\r\n          window.location.href = this.$request;\r\n        } \r\n\r\n      }\r\n    </script>\r\n\r\n<!-- Modal -->\r\n<div id=\"confirmation_dialog\" data-backdrop=\"static\" class=\"modal fade\" role=\"dialog\">\r\n  <div class=\"modal-dialog\" style=\"display: block;\">\r\n\r\n    <!-- Modal content-->\r\n    <div class=\"modal-content\">\r\n      <div class=\"modal-header\">\r\n        <h4 class=\"modal-title\">Confirmation </h4>\r\n      </div>\r\n      <center class=\"modal-body\">\r\n        <h2>Are you sure You want to continue? </h2>\r\n      </center>\r\n      <div class=\"modal-footer\">\r\n        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">\r\n         No\r\n        </button>\r\n         <button type=\"button\" class=\"btn btn-success\" onclick=\"$confirm_dialog.confirm();\">\r\n          Yes\r\n        </button>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</div>\r\n\r\n\r\n<style>\r\n  #gitstar-notification{\r\n    position: fixed;\r\n    top: 10px;\r\n    z-index: 99999999999999;\r\n    width:400px;\r\n    margin-left: -200px;\r\n    left: 50%;\r\n   display: none;\r\n}\r\n</style>\r\n\r\n<center class=\"text-center wrapper\">  \r\n  <div id=\"gitstar-notification\"  class=\"alert alert-info alert-dismissible\" >\r\n    <a href=\"javascript:void;\" class=\"close\" onclick=\"document.getElementById(\'gitstar-notification\').style.display=\'none\'\">&times;</a>\r\n        <!-- <strong><i class=\'fa fa-bell pull-left\'> </i></strong>  -->\r\n  \r\n  <span id=\"error_note\"> </span>    \r\n  </div>\r\n</center>\r\n\r\n\r\n\r\n\r\n\r\n  <script>\r\n\r\n    perform_automated_process = function() {\r\n\r\n    $.ajax({\r\n              type: \"POST\",\r\n              url: \'http://localhost/di\'+\"/auto-match/\",\r\n              cache: false,\r\n              success: function(data) {\r\n\r\n              },\r\n              error: function (data) {\r\n                   //alert(\"fail\"+data);\r\n              }\r\n          });\r\n      }\r\n\r\n\r\n      perform_automated_process();\r\n\r\n    notify = function () {\r\n  $.ajax({\r\n            type: \"POST\",\r\n            url: \'http://localhost/di\'+\"/home/flash_notification/\",\r\n            cache: false,\r\n            success: function(data) {\r\n\r\n\r\n        let $error_note = \'\';\r\n        let $error_type = \'\';\r\n        for (var i = 0; i < data.length; i++) {\r\n          $error_note += data[i][\'message\'] +\'<br>\';\r\n          $error_type = data[i][\'title\'] ;\r\n\r\n        }\r\n\r\n        if ($error_note != \'\') {\r\n\r\n          show_notification($error_note, $error_type);\r\n        }\r\n\r\n\r\n\r\n\r\n            },\r\n            error: function (data) {\r\n                 //alert(\"fail\"+data);\r\n            }\r\n\r\n            \r\n\r\n        });\r\n\r\n    }\r\n\r\n\r\nshow_notification = function ($notification, $error_type=\'info\') {\r\n$(\'#error_note\').html($notification);\r\n    $(\'#gitstar-notification\').css(\'display\', \'block\');\r\n    document.getElementById(\'gitstar-notification\').setAttribute(\"class\",\"alert alert-\"+$error_type+\" alert-dismissible\");\r\n  }\r\n\r\nnotify();\r\n\r\n\r\n\r\n$(document).ready(function(){\r\n $(\"body\").on(\"submit\", \"#newsletter_form\", function (e) {\r\n  e.preventDefault();\r\n\r\n  $datastring = $(\'#newsletter_form\').serialize();\r\n\r\n  $.ajax({\r\n\r\n            type: \"POST\",\r\n            url: \'http://localhost/di\'+\"/contact/add_to_news_letter/\",\r\n            data: $datastring,\r\n            cache: false,\r\n            success: function(data) {\r\n\r\n    show_notification(data);\r\n\r\n            },\r\n            error: function (data) {\r\n                 //alert(\"fail\"+data);\r\n            },\r\n\r\n\r\n\r\n        });\r\n\r\n  \r\n});\r\n});\r\n    \r\n  </script>\r\n\r\n  \r\n<script>\r\n  add_to_new_letters = function ($input) {\r\n    // console.log($input);\r\n       var form_data = new FormData();\r\n\r\n    form_data.append(\"newsletter\" , $input.value);\r\n\r\n     $.ajax({\r\n           type: \"POST\",\r\n           url: \'http://localhost/di/home/add_to_new_letters\',\r\n           data: form_data, // \r\n           contentType: false,\r\n           cache:false,\r\n           processData:false,\r\n           success: function(data)\r\n           {\r\n            notify();\r\n            console.log(data);\r\n           }\r\n         });\r\n\r\n\r\n  }\r\n</script> \r\n\r\n<script type=\"text/javascript\">\r\n  \r\nfunction copy_text($text) {\r\n  var copyText = document.createElement(\'input\');\r\n   copyText.setAttribute(\'readonly\', \'\');\r\n   copyText.style = {position: \'absolute\', left: \'-9999px\'};\r\n         document.body.appendChild(copyText);\r\n      copyText.value = $text;\r\n      copyText.select();\r\n    (  document.execCommand(\"copy\"));\r\n    // Remove temporary element\r\n   document.body.removeChild(copyText);\r\n   show_notification(\"Linked Copied \"+ $text, \"success\");\r\n   }\r\n\r\n\r\n\r\n\r\n</script>\r\n\r\n\r\n\r\n\r\n\r\n', '2019-07-18 08:54:04', '2019-07-18 08:54:04'),
(3, 1, 'Your PH #6 has been matched --Campus Cash', '9678908690', NULL, 'ozih@rocketmail.comm', NULL, '\r\n<!doctype html>\r\n <html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n <head>\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n  <meta name=\"viewport\" content=\"initial-scale=1.0\" />\r\n  <meta name=\"format-detection\" content=\"telephone=no\" />\r\n  <title></title>\r\n  <style type=\"text/css\">\r\n  body {\r\n    width: 100%;\r\n    margin: 0;\r\n    padding: 0;\r\n    -webkit-font-smoothing: antialiased;\r\n  }\r\n  @media only screen and (max-width: 600px) {\r\n    table[class=\"table-row\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n      padding-left: 20px !important;\r\n      padding-right: 20px !important;\r\n    }\r\n    table[class=\"table-row-fixed\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n    }\r\n    table[class=\"table-col\"], table[class=\"table-col-border\"] {\r\n      float: none !important;\r\n      width: 100% !important;\r\n      padding-left: 0 !important;\r\n      padding-right: 0 !important;\r\n      table-layout: fixed;\r\n    }\r\n    td[class=\"table-col-td\"] {\r\n      width: 100% !important;\r\n    }\r\n    table[class=\"table-col-border\"] + table[class=\"table-col-border\"] {\r\n      padding-top: 12px;\r\n      margin-top: 12px;\r\n      border-top: 1px solid #E8E8E8;\r\n    }\r\n    table[class=\"table-col\"] + table[class=\"table-col\"] {\r\n      margin-top: 15px;\r\n    }\r\n    td[class=\"table-row-td\"] {\r\n      padding-left: 0 !important;\r\n      padding-right: 0 !important;\r\n    }\r\n    table[class=\"navbar-row\"] , td[class=\"navbar-row-td\"] {\r\n      width: 100% !important;\r\n    }\r\n    img {\r\n      max-width: 100% !important;\r\n      display: inline !important;\r\n    }\r\n    img[class=\"pull-right\"] {\r\n      float: right;\r\n      margin-left: 11px;\r\n            max-width: 125px !important;\r\n      padding-bottom: 0 !important;\r\n    }\r\n    img[class=\"pull-left\"] {\r\n      float: left;\r\n      margin-right: 11px;\r\n      max-width: 125px !important;\r\n      padding-bottom: 0 !important;\r\n    }\r\n    table[class=\"table-space\"], table[class=\"header-row\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n    }\r\n    td[class=\"header-row-td\"] {\r\n      width: 100% !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 480px) {\r\n    table[class=\"table-row\"] {\r\n      padding-left: 16px !important;\r\n      padding-right: 16px !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 320px) {\r\n    table[class=\"table-row\"] {\r\n      padding-left: 12px !important;\r\n      padding-right: 12px !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 458px) {\r\n    td[class=\"table-td-wrap\"] {\r\n      width: 100% !important;\r\n    }\r\n  }\r\n  </style>\r\n </head>\r\n\r\n  <br>\r\n  <br>\r\n  <center>\r\n    <img src=\"http://localhost/di/template/default/assets/images/branding/dove7.png\" style=\"height: 100px;\">\r\n  </center>\r\n\r\n <body style=\"font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;\" bgcolor=\"#E4E6E9\" leftmargin=\"0\" topmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\r\n <table width=\"100%\" height=\"100%\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n <tr><td width=\"100%\" align=\"center\" valign=\"top\" bgcolor=\"#E4E6E9\" style=\"background-color:#E4E6E9; min-height: 200px;\">\r\n<table><tr><td class=\"table-td-wrap\" align=\"center\" width=\"458\"><table class=\"table-space\" height=\"18\" style=\"height: 18px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"18\" style=\"height: 18px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"8\" style=\"height: 8px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"8\" style=\"height: 8px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n\r\n<table class=\"table-row\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;\" valign=\"top\" align=\"left\">\r\n  <table class=\"table-col\" align=\"left\" width=\"378\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"378\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;\" valign=\"top\" align=\"left\">\r\n    <table class=\"header-row\" width=\"378\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"header-row-td\" width=\"378\" style=\"font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;\" valign=\"top\" align=\"left\">\r\n\r\n\r\n      <span style=\"text-transform: capitalize; color: #203864\">Linda Jmon</span>! Thank you for Pledging Help!</td></tr></tbody></table>\r\n\r\n\r\n    <div style=\"font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;\">\r\n      <b style=\"color: #777777;\">Your PH #6 has been match to pay \r\n        <b>R</b>1,500.00 to \r\n      Anthonia Nwosu. </b>\r\n      <br>\r\n      Please see dashboard for more details. \r\n      <br>\r\n      <br>\r\n       <a href=\"http://localhost/di/login\" style=\"color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; padding: 9px 9px; font-size: 15px; line-height: 21px; background-color: #32c89a;\">&nbsp; Go to Dashboard &nbsp;</a>\r\n       <br>\r\n       <br>\r\n    </div>\r\n\r\n  </td></tr></tbody></table>\r\n</td></tr></tbody></table>\r\n    \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<table class=\"table-space\" height=\"6\" style=\"height: 6px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"6\" style=\"height: 6px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n\r\n<table class=\"table-row-fixed\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-fixed-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;\" valign=\"top\" align=\"left\">\r\n  <table class=\"table-col\" align=\"left\" width=\"448\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"448\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;\" valign=\"top\" align=\"left\">\r\n    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td width=\"100%\" align=\"center\" bgcolor=\"#f5f5f5\" style=\"font-family: Arial, sans-serif; line-height: 24px; color: #bbbbbb; font-size: 13px; font-weight: normal; text-align: center; padding: 9px; border-width: 1px 0px 0px; border-style: solid; border-color: #e3e3e3; background-color: #f5f5f5;\" valign=\"top\">\r\n      <a href=\"http://localhost/di\" style=\"color: #203864; text-decoration: none; background-color: transparent;\">\r\n        &copy; 2019        Campus Cash \r\n        </a>\r\n      <br>\r\n      <!-- <a href=\"#\" style=\"color: #478fca; text-decoration: none; background-color: transparent;\">twitter</a> -->\r\n      .\r\n      <!-- <a href=\"#\" style=\"color: #5b7a91; text-decoration: none; background-color: transparent;\">facebook</a> -->\r\n      .\r\n      <!-- <a href=\"#\" style=\"color: #dd5a43; text-decoration: none; background-color: transparent;\">google+</a> -->\r\n    </td></tr></tbody></table>\r\n  </td></tr></tbody></table>\r\n</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"1\" style=\"height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"1\" style=\"height: 1px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"36\" style=\"height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"36\" style=\"height: 36px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></table></td></tr></table>\r\n</td></tr>\r\n </table>\r\n </body>\r\n </html>\r\n <div style=\"display: none;\">', '2019-07-18 08:54:04', '2019-07-18 08:54:04');
INSERT INTO `email_sms_notification` (`id`, `user_id`, `phone_message`, `phone`, `phone_status`, `email`, `email_status`, `email_message`, `created_at`, `updated_at`) VALUES
(4, 1, 'Your Earned <b>R</b> 500 from #4. --Campus Cash', '9678908690', NULL, 'ozih@rocketmail.comm', NULL, '<br />\n<b>Notice</b>:  Undefined variable: includes_dir in <b>C:\\xampp\\htdocs\\di\\app\\core\\controller.php</b> on line <b>320</b><br />\n<br />\n<b>Notice</b>:  Undefined variable: includes_dir in <b>C:\\xampp\\htdocs\\di\\app\\core\\controller.php</b> on line <b>320</b><br />\n\r\n<!doctype html>\r\n <html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n <head>\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n  <meta name=\"viewport\" content=\"initial-scale=1.0\" />\r\n  <meta name=\"format-detection\" content=\"telephone=no\" />\r\n  <title></title>\r\n  <style type=\"text/css\">\r\n  body {\r\n    width: 100%;\r\n    margin: 0;\r\n    padding: 0;\r\n    -webkit-font-smoothing: antialiased;\r\n  }\r\n  @media only screen and (max-width: 600px) {\r\n    table[class=\"table-row\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n      padding-left: 20px !important;\r\n      padding-right: 20px !important;\r\n    }\r\n    table[class=\"table-row-fixed\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n    }\r\n    table[class=\"table-col\"], table[class=\"table-col-border\"] {\r\n      float: none !important;\r\n      width: 100% !important;\r\n      padding-left: 0 !important;\r\n      padding-right: 0 !important;\r\n      table-layout: fixed;\r\n    }\r\n    td[class=\"table-col-td\"] {\r\n      width: 100% !important;\r\n    }\r\n    table[class=\"table-col-border\"] + table[class=\"table-col-border\"] {\r\n      padding-top: 12px;\r\n      margin-top: 12px;\r\n      border-top: 1px solid #E8E8E8;\r\n    }\r\n    table[class=\"table-col\"] + table[class=\"table-col\"] {\r\n      margin-top: 15px;\r\n    }\r\n    td[class=\"table-row-td\"] {\r\n      padding-left: 0 !important;\r\n      padding-right: 0 !important;\r\n    }\r\n    table[class=\"navbar-row\"] , td[class=\"navbar-row-td\"] {\r\n      width: 100% !important;\r\n    }\r\n    img {\r\n      max-width: 100% !important;\r\n      display: inline !important;\r\n    }\r\n    img[class=\"pull-right\"] {\r\n      float: right;\r\n      margin-left: 11px;\r\n            max-width: 125px !important;\r\n      padding-bottom: 0 !important;\r\n    }\r\n    img[class=\"pull-left\"] {\r\n      float: left;\r\n      margin-right: 11px;\r\n      max-width: 125px !important;\r\n      padding-bottom: 0 !important;\r\n    }\r\n    table[class=\"table-space\"], table[class=\"header-row\"] {\r\n      float: none !important;\r\n      width: 98% !important;\r\n    }\r\n    td[class=\"header-row-td\"] {\r\n      width: 100% !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 480px) {\r\n    table[class=\"table-row\"] {\r\n      padding-left: 16px !important;\r\n      padding-right: 16px !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 320px) {\r\n    table[class=\"table-row\"] {\r\n      padding-left: 12px !important;\r\n      padding-right: 12px !important;\r\n    }\r\n  }\r\n  @media only screen and (max-width: 458px) {\r\n    td[class=\"table-td-wrap\"] {\r\n      width: 100% !important;\r\n    }\r\n  }\r\n  </style>\r\n </head>\r\n\r\n  <br>\r\n  <br>\r\n  <center>\r\n    <img src=\"http://localhost/di/template/default/assets/images/branding/dove7.png\" style=\"height: 100px;\">\r\n  </center>\r\n\r\n <body style=\"font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;\" bgcolor=\"#E4E6E9\" leftmargin=\"0\" topmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\r\n <table width=\"100%\" height=\"100%\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\r\n <tr><td width=\"100%\" align=\"center\" valign=\"top\" bgcolor=\"#E4E6E9\" style=\"background-color:#E4E6E9; min-height: 200px;\">\r\n<table><tr><td class=\"table-td-wrap\" align=\"center\" width=\"458\"><table class=\"table-space\" height=\"18\" style=\"height: 18px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"18\" style=\"height: 18px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"8\" style=\"height: 8px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"8\" style=\"height: 8px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n\r\n<table class=\"table-row\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;\" valign=\"top\" align=\"left\">\r\n  <table class=\"table-col\" align=\"left\" width=\"378\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"378\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;\" valign=\"top\" align=\"left\">\r\n    <table class=\"header-row\" width=\"378\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"header-row-td\" width=\"378\" style=\"font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;\" valign=\"top\" align=\"left\">\r\n\r\n\r\n      <span style=\"text-transform: capitalize; color: #203864\"><br />\n<b>Notice</b>:  Trying to get property \'fullname\' of non-object in <b>C:\\xampp\\htdocs\\di\\template\\default\\emails\\roi_notification.php</b> on line <b>4</b><br />\n</span>!  </td></tr></tbody></table>\r\n\r\n\r\n    <div style=\"font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;\">\r\n      <b style=\"color: #777777;\">You have earned \r\n      <b>R</b>500 on #4/b>\r\n      <br>\r\n      Please see dashboard for more details. \r\n      <br>\r\n      <br>\r\n       <a href=\"http://localhost/di/login\" style=\"color: #ffffff; text-decoration: none; margin: 0px; text-align: center; vertical-align: baseline; padding: 9px 9px; font-size: 15px; line-height: 21px; background-color: #32c89a;\">&nbsp; Go to Dashboard &nbsp;</a>\r\n       <br>\r\n       <br>\r\n    </div>\r\n\r\n  </td></tr></tbody></table>\r\n</td></tr></tbody></table>\r\n    \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<table class=\"table-space\" height=\"6\" style=\"height: 6px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"6\" style=\"height: 6px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n\r\n<table class=\"table-row-fixed\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-fixed-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;\" valign=\"top\" align=\"left\">\r\n  <table class=\"table-col\" align=\"left\" width=\"448\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"448\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;\" valign=\"top\" align=\"left\">\r\n    <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td width=\"100%\" align=\"center\" bgcolor=\"#f5f5f5\" style=\"font-family: Arial, sans-serif; line-height: 24px; color: #bbbbbb; font-size: 13px; font-weight: normal; text-align: center; padding: 9px; border-width: 1px 0px 0px; border-style: solid; border-color: #e3e3e3; background-color: #f5f5f5;\" valign=\"top\">\r\n      <a href=\"http://localhost/di\" style=\"color: #203864; text-decoration: none; background-color: transparent;\">\r\n        &copy; 2019        Campus Cash \r\n        </a>\r\n      <br>\r\n      <!-- <a href=\"#\" style=\"color: #478fca; text-decoration: none; background-color: transparent;\">twitter</a> -->\r\n      .\r\n      <!-- <a href=\"#\" style=\"color: #5b7a91; text-decoration: none; background-color: transparent;\">facebook</a> -->\r\n      .\r\n      <!-- <a href=\"#\" style=\"color: #dd5a43; text-decoration: none; background-color: transparent;\">google+</a> -->\r\n    </td></tr></tbody></table>\r\n  </td></tr></tbody></table>\r\n</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"1\" style=\"height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"1\" style=\"height: 1px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></table>\r\n<table class=\"table-space\" height=\"36\" style=\"height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"36\" style=\"height: 36px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></table></td></tr></table>\r\n</td></tr>\r\n </table>\r\n </body>\r\n </html>\r\n <div style=\"display: none;\">\r\n    <script>\r\n      function ConfirmationDialog($request) {\r\n        this.$request = $request;\r\n\r\n        this.open_dialog = function() {\r\n          $(\'#confirmation_dialog\').modal(\'show\');\r\n        }\r\n\r\n        this.open_dialog();\r\n\r\n        this.confirm = function(){\r\n          window.location.href = this.$request;\r\n        } \r\n\r\n      }\r\n    </script>\r\n\r\n<!-- Modal -->\r\n<div id=\"confirmation_dialog\" data-backdrop=\"static\" class=\"modal fade\" role=\"dialog\">\r\n  <div class=\"modal-dialog\" style=\"display: block;\">\r\n\r\n    <!-- Modal content-->\r\n    <div class=\"modal-content\">\r\n      <div class=\"modal-header\">\r\n        <h4 class=\"modal-title\">Confirmation </h4>\r\n      </div>\r\n      <center class=\"modal-body\">\r\n        <h2>Are you sure You want to continue? </h2>\r\n      </center>\r\n      <div class=\"modal-footer\">\r\n        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">\r\n         No\r\n        </button>\r\n         <button type=\"button\" class=\"btn btn-success\" onclick=\"$confirm_dialog.confirm();\">\r\n          Yes\r\n        </button>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</div>\r\n\r\n\r\n<style>\r\n  #gitstar-notification{\r\n    position: fixed;\r\n    top: 10px;\r\n    z-index: 99999999999999;\r\n    width:400px;\r\n    margin-left: -200px;\r\n    left: 50%;\r\n   display: none;\r\n}\r\n</style>\r\n\r\n<center class=\"text-center wrapper\">  \r\n  <div id=\"gitstar-notification\"  class=\"alert alert-info alert-dismissible\" >\r\n    <a href=\"javascript:void;\" class=\"close\" onclick=\"document.getElementById(\'gitstar-notification\').style.display=\'none\'\">&times;</a>\r\n        <!-- <strong><i class=\'fa fa-bell pull-left\'> </i></strong>  -->\r\n  \r\n  <span id=\"error_note\"> </span>    \r\n  </div>\r\n</center>\r\n\r\n\r\n\r\n\r\n\r\n  <script>\r\n\r\n    perform_automated_process = function() {\r\n\r\n    $.ajax({\r\n              type: \"POST\",\r\n              url: \'http://localhost/di\'+\"/auto-match/\",\r\n              cache: false,\r\n              success: function(data) {\r\n\r\n              },\r\n              error: function (data) {\r\n                   //alert(\"fail\"+data);\r\n              }\r\n          });\r\n      }\r\n\r\n\r\n      perform_automated_process();\r\n\r\n    notify = function () {\r\n  $.ajax({\r\n            type: \"POST\",\r\n            url: \'http://localhost/di\'+\"/home/flash_notification/\",\r\n            cache: false,\r\n            success: function(data) {\r\n\r\n\r\n        let $error_note = \'\';\r\n        let $error_type = \'\';\r\n        for (var i = 0; i < data.length; i++) {\r\n          $error_note += data[i][\'message\'] +\'<br>\';\r\n          $error_type = data[i][\'title\'] ;\r\n\r\n        }\r\n\r\n        if ($error_note != \'\') {\r\n\r\n          show_notification($error_note, $error_type);\r\n        }\r\n\r\n\r\n\r\n\r\n            },\r\n            error: function (data) {\r\n                 //alert(\"fail\"+data);\r\n            }\r\n\r\n            \r\n\r\n        });\r\n\r\n    }\r\n\r\n\r\nshow_notification = function ($notification, $error_type=\'info\') {\r\n$(\'#error_note\').html($notification);\r\n    $(\'#gitstar-notification\').css(\'display\', \'block\');\r\n    document.getElementById(\'gitstar-notification\').setAttribute(\"class\",\"alert alert-\"+$error_type+\" alert-dismissible\");\r\n  }\r\n\r\nnotify();\r\n\r\n\r\n\r\n$(document).ready(function(){\r\n $(\"body\").on(\"submit\", \"#newsletter_form\", function (e) {\r\n  e.preventDefault();\r\n\r\n  $datastring = $(\'#newsletter_form\').serialize();\r\n\r\n  $.ajax({\r\n\r\n            type: \"POST\",\r\n            url: \'http://localhost/di\'+\"/contact/add_to_news_letter/\",\r\n            data: $datastring,\r\n            cache: false,\r\n            success: function(data) {\r\n\r\n    show_notification(data);\r\n\r\n            },\r\n            error: function (data) {\r\n                 //alert(\"fail\"+data);\r\n            },\r\n\r\n\r\n\r\n        });\r\n\r\n  \r\n});\r\n});\r\n    \r\n  </script>\r\n\r\n  \r\n<script>\r\n  add_to_new_letters = function ($input) {\r\n    // console.log($input);\r\n       var form_data = new FormData();\r\n\r\n    form_data.append(\"newsletter\" , $input.value);\r\n\r\n     $.ajax({\r\n           type: \"POST\",\r\n           url: \'http://localhost/di/home/add_to_new_letters\',\r\n           data: form_data, // \r\n           contentType: false,\r\n           cache:false,\r\n           processData:false,\r\n           success: function(data)\r\n           {\r\n            notify();\r\n            console.log(data);\r\n           }\r\n         });\r\n\r\n\r\n  }\r\n</script> \r\n\r\n<script type=\"text/javascript\">\r\n  \r\nfunction copy_text($text) {\r\n  var copyText = document.createElement(\'input\');\r\n   copyText.setAttribute(\'readonly\', \'\');\r\n   copyText.style = {position: \'absolute\', left: \'-9999px\'};\r\n         document.body.appendChild(copyText);\r\n      copyText.value = $text;\r\n      copyText.select();\r\n    (  document.execCommand(\"copy\"));\r\n    // Remove temporary element\r\n   document.body.removeChild(copyText);\r\n   show_notification(\"Linked Copied \"+ $text, \"success\");\r\n   }\r\n\r\n\r\n\r\n\r\n</script>\r\n\r\n\r\n\r\n\r\n\r\n', '2019-07-18 09:02:33', '2019-07-18 09:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `gh`
--

CREATE TABLE `gh` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `fufilled_recommittment` tinyint(1) DEFAULT NULL,
  `pioneered` tinyint(1) DEFAULT NULL COMMENT 'whether pionnered or not',
  `fufilled_at` timestamp NULL DEFAULT NULL,
  `amount` bigint(20) NOT NULL,
  `payin_left` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gh`
--

INSERT INTO `gh` (`id`, `user_id`, `fufilled_recommittment`, `pioneered`, `fufilled_at`, `amount`, `payin_left`, `created_at`, `updated_at`) VALUES
(1, 26, 1, 1, NULL, 5000, 1500, '2019-07-17 05:19:49', '2019-07-18 08:01:39');

-- --------------------------------------------------------

--
-- Table structure for table `level_income_report`
--

CREATE TABLE `level_income_report` (
  `id` bigint(20) NOT NULL,
  `owner_user_id` bigint(20) NOT NULL,
  `downline_id` bigint(20) DEFAULT NULL,
  `ph_id` bigint(20) DEFAULT NULL,
  `ph_pay_date` date DEFAULT NULL,
  `amount_earned` float NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `availability` int(11) DEFAULT NULL COMMENT '1= available, 0=not available',
  `commission_type` varchar(255) DEFAULT NULL,
  `proof` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level_income_report`
--

INSERT INTO `level_income_report` (`id`, `owner_user_id`, `downline_id`, `ph_id`, `ph_pay_date`, `amount_earned`, `status`, `availability`, `commission_type`, `proof`, `created_at`, `updated_at`) VALUES
(1, 20, 1, NULL, NULL, 100, 'Credit', NULL, 'Referral Bonus', NULL, '2019-07-17 05:10:13', '2019-07-17 05:10:13'),
(5, 1, NULL, 4, '2019-07-17', 500, 'Credit', NULL, 'Chunk ROI', NULL, '2019-07-17 05:41:29', '2019-07-17 05:41:29'),
(6, 1, NULL, 4, '2019-07-18', 500, 'Credit', NULL, 'Chunk ROI', NULL, '2019-07-18 08:02:33', '2019-07-18 08:02:33');

-- --------------------------------------------------------

--
-- Table structure for table `matured_phs`
--

CREATE TABLE `matured_phs` (
  `id` bigint(20) NOT NULL,
  `ph_id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `worth` bigint(20) NOT NULL,
  `re_ph_status` tinyint(1) NOT NULL COMMENT '0=no, 1=yes',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pair`
--

CREATE TABLE `pair` (
  `id` bigint(20) NOT NULL,
  `ph_id` bigint(20) NOT NULL,
  `ph_amount` bigint(20) NOT NULL,
  `gh_amount` bigint(20) NOT NULL,
  `gh_id` bigint(20) NOT NULL,
  `payment_proof` varchar(191) NOT NULL,
  `status` varchar(191) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pair`
--

INSERT INTO `pair` (`id`, `ph_id`, `ph_amount`, `gh_amount`, `gh_id`, `payment_proof`, `status`, `expires`, `created_at`, `updated_at`) VALUES
(6, 4, 1000, 1000, 1, '', 'completed', '2019-07-17 18:07:52', '2019-07-17 05:07:52', '2019-07-17 05:10:13'),
(22, 6, 1500, 1500, 1, '', NULL, '2019-07-18 20:54:04', '2019-07-18 07:54:04', '2019-07-18 07:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rule_id` int(11) DEFAULT NULL,
  `growing_date` longtext,
  `amount` decimal(10,2) NOT NULL,
  `payout_left` decimal(20,2) UNSIGNED NOT NULL,
  `fufilled_at` timestamp NULL DEFAULT NULL,
  `matures_at` datetime DEFAULT NULL,
  `expired` timestamp NULL DEFAULT NULL,
  `worth_after_maturity` decimal(20,2) NOT NULL DEFAULT '0.00',
  `roi_paid` int(11) DEFAULT NULL,
  `growing_worth` decimal(20,2) DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph`
--

INSERT INTO `ph` (`id`, `user_id`, `rule_id`, `growing_date`, `amount`, `payout_left`, `fufilled_at`, `matures_at`, `expired`, `worth_after_maturity`, `roi_paid`, `growing_worth`, `created_at`, `updated_at`) VALUES
(4, 1, 2, '{\"2019-07-18\":500,\"2019-08-28\":500,\"2019-09-04\":500,\"2019-09-11\":500}', '1000.00', '0.00', '2019-07-17 05:44:41', '2019-08-14 06:44:41', NULL, '2000.00', NULL, '0.00', '2019-07-17 05:07:38', '2019-07-17 05:44:41'),
(5, 1, 2, NULL, '1000.00', '1000.00', NULL, NULL, NULL, '2000.00', NULL, '0.00', '2019-07-17 05:53:04', '2019-07-18 08:01:39'),
(6, 1, 3, NULL, '1500.00', '0.00', NULL, NULL, NULL, '3000.00', NULL, '0.00', '2019-07-18 07:43:28', '2019-07-18 07:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id` int(11) NOT NULL,
  `capital` float NOT NULL,
  `chunk_withdrawal` float NOT NULL,
  `per_x_days` int(11) NOT NULL,
  `for_x_time` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id`, `capital`, `chunk_withdrawal`, `per_x_days`, `for_x_time`, `created_at`, `updated_at`) VALUES
(1, 500, 250, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(2, 1000, 500, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(3, 1500, 750, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(4, 2000, 1000, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(5, 2500, 1250, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(6, 3000, 1500, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(7, 3500, 1750, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(8, 4000, 2000, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00'),
(9, 5000, 2500, 7, 4, '2019-04-24 00:00:00', '2019-04-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `criteria` varchar(255) DEFAULT NULL,
  `settings` longtext,
  `default_setting` longtext NOT NULL COMMENT 'backup',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `criteria`, `settings`, `default_setting`, `created_at`, `updated_at`) VALUES
(25, 'admin_bank_details', '{\"bank\":\"Access Banll\",\"account_number\":\"987567878\",\"account_name\":\"Alien Fashion\"}', '', NULL, NULL),
(26, 'rule', '[{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4},{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4},{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4},{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4},{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4},{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4},{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4},{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4},{\"capital\":500,\"chunk_withdrawal\":250,\"per_x_days\":7,\"for_x_time\":4}]', '', NULL, NULL),
(27, 'sms_api_keys', '{\"username\":\"ncs\",\"password\":\"65f130\",\"link\":\"http://www.estoresms.com/smsapi.php\",\"sender\":\"Attendance\"}', '', NULL, '2019-03-21 13:58:02'),
(28, 'site_settings', '{\"percent_roi\":100,\"ph_maturity_in_days\":\"28\",\"minimum_ph\":\"500\",\"maximum_ph\":\"5000\",\"ph_steps\":\"500\",\"minimum_gh\":\"500\",\"maximum_gh\":\"5000\",\"minimum_withdrawable_bonus\":500,\"gh_steps\":1000,\"email_verification\":1,\"phone_verification\":\"0\",\"friday_execution_hour\":\"12\",\"saturday_match_execution_hour\":\"12\",\"sunday_match_execution_hour\":\"12\",\"default_match_execution_hour\":\"12\",\"percent_referral_bonus_on_ph\":\"10\",\"match_sms_notification\":0,\"match_email_notification\":0,\"is_letter_of_hapiness_compulsory\":0,\"percent_down_payment\":\"0\",\"telegram_group_link\":\"http://telegram.com\",\"percent_of_last_gh\":100,\"downpayments_ghs_preference\":0,\"support_link\":\"http://googleforms.com\",\"put_on_automatic_matching\":\"0\",\"contact_email\":\"dove@gmail.com\",\"google_re_captcha_site_key\":\"6LeJqJwUAAAAAPADFRZZUG79bMw8O_4kdEr6dJ6t\",\"google_re_captcha_secret_key\":\"6LeJqJwUAAAAADgkLuF_W3etxOJItrkTWaCRGIH-\"}', '', NULL, '2019-07-17 05:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

CREATE TABLE `support_tickets` (
  `id` bigint(20) NOT NULL,
  `subject_of_ticket` varchar(255) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `status` smallint(1) NOT NULL COMMENT '0=open, 1=clsed',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `attester` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `approval_status` int(11) NOT NULL DEFAULT '0' COMMENT '1= approved, 0=not approved',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `mlm_id` varchar(255) DEFAULT NULL,
  `referred_by` bigint(20) DEFAULT NULL COMMENT 'placment_sponsor',
  `introduced_by` bigint(20) DEFAULT NULL COMMENT 'enrolment sponsor',
  `placement_cut_off` longtext,
  `rejoin_id` varchar(255) DEFAULT NULL,
  `rejoin_email` varchar(255) DEFAULT NULL,
  `placed` int(11) DEFAULT NULL COMMENT '0=not placed, 1= placed (by enroler)',
  `username` varchar(255) DEFAULT NULL,
  `account_plan` varchar(255) DEFAULT NULL COMMENT 'Demo receiver user',
  `rank` int(11) NOT NULL DEFAULT '0',
  `locked_to_receive` datetime DEFAULT NULL,
  `rank_history` longtext,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email_verification` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `phone_verification` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_account_number` varchar(255) DEFAULT NULL,
  `bank_account_name` varchar(255) DEFAULT NULL,
  `worthy_cause_for_donation` longtext,
  `age` varchar(255) DEFAULT NULL,
  `profile_pix` varchar(255) DEFAULT NULL,
  `resized_profile_pix` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `blocked_on` datetime DEFAULT NULL,
  `lastseen_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastlogin_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `mlm_id`, `referred_by`, `introduced_by`, `placement_cut_off`, `rejoin_id`, `rejoin_email`, `placed`, `username`, `account_plan`, `rank`, `locked_to_receive`, `rank_history`, `firstname`, `lastname`, `email`, `state`, `country`, `email_verification`, `phone`, `phone_verification`, `bank_name`, `bank_account_number`, `bank_account_name`, `worthy_cause_for_donation`, `age`, `profile_pix`, `resized_profile_pix`, `password`, `created_at`, `updated_at`, `blocked_on`, `lastseen_at`, `lastlogin_ip`) VALUES
(1, '1', 20, 20, NULL, NULL, NULL, NULL, 'company', NULL, 2, NULL, '{\"2018-11-27 12:20:17\":\"8\",\"2018-11-27 12:31:10\":\"5\"}', 'Jmon', 'Linda', 'ozih@rocketmail.comm', NULL, ' Antigua & Barbuda', '1', '9678908690', '1', 'capitec', '097567890', 'jacqueline', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover ', '23', 'uploads/images/users/profile_pictures/meee.png', 'uploads/images/users/profile_pictures/meee_2.png', '$2y$10$Tt8Xj8ZAqk7sMAu1cbqWtOZS6rgL8wG.w.OOiU74hRmpTZdCaSLQ6', '2018-11-07 12:05:14', '2019-07-18 09:01:39', '2019-07-18 09:01:39', '2019-07-18 08:01:39', ''),
(15, '15', 1, 1, NULL, NULL, NULL, NULL, 'teeboy', NULL, 0, NULL, NULL, 'Taiwo', 'Ope-ifa', 'tee02bn@gmail.com', NULL, NULL, 'da4d81442eb4ee489d6a0fa06f3a9f37', '8123351819', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$ZDRYb/VZJuO51zjTc9m0TOTHoMtSx54f9XPi9y8KzAq79Ll/wfOCK', '2019-03-28 18:19:08', '2019-04-03 21:21:44', NULL, '2019-04-07 04:50:14', ''),
(16, '16', 1, 1, NULL, NULL, NULL, NULL, 'nationel', 'pioneer', 0, NULL, NULL, 'Nelson', 'Johnson', 'nationel83@gmail.com', NULL, NULL, '1', '08079117724', NULL, 'Access Bank', '0019670753', 'Johnson Nelson ', NULL, NULL, NULL, NULL, '$2y$10$sQGscDaEhtbdgTf7GZLps.UPdnJkRZpJN0NySg5lA4lL2HIqELAj2', '2019-03-28 18:58:50', '2019-04-11 19:14:51', '2019-04-11 19:14:51', '2019-04-11 17:14:51', ''),
(17, '17', 1, 1, NULL, NULL, NULL, NULL, 'Teeboz', NULL, 0, NULL, NULL, 'Taiwo', 'Ope-ifa ', 'tee01bn@gmail.com', NULL, NULL, 'f1a76a313d9bda262a849d7763c31def', '08123351819', NULL, 'Access', '', '', NULL, NULL, NULL, NULL, '$2y$10$EYJLkTM2ubUiZs6hv6KSeeScU2WWOQqCy0BJOmDORDUOVFxShLNFO', '2019-03-28 19:36:42', '2019-04-02 09:40:37', NULL, '2019-04-02 13:40:37', ''),
(18, '18', 16, 16, NULL, NULL, NULL, NULL, 'usylvia', 'pioneer', 0, NULL, NULL, 'Sylvia ', 'Oparaekocha ', 'oparaekochaus@gmail.com', NULL, NULL, '1', '08025401179', NULL, 'Diamond ', '0092755227', 'OPARAEKOCHA U. SYLVIA ', NULL, NULL, NULL, NULL, '$2y$10$PGSHfwJsXiQe0eg1d8kdS.7ccE6BdqBjcl.9rz4ZXZMKAoljc1faW', '2019-03-29 04:50:54', '2019-03-29 08:20:26', NULL, '2019-03-29 12:20:26', ''),
(19, '19', 1, NULL, NULL, NULL, NULL, NULL, 'china', 'pioneer', 0, NULL, NULL, 'Chinaemerem', 'Assumpta', 'caladimma@yahoo.com ', NULL, NULL, '1', '09087517666', NULL, 'Gtb', '0107470554', 'Aladimma chinaemerem', NULL, NULL, NULL, NULL, '$2y$10$xBjgrSuQ1ZY0eylRsaoaM.mvmvEql6uD4wOTSgyRymBRwfHJcJDby', '2019-03-29 05:07:11', '2019-03-29 08:21:06', NULL, '2019-03-29 12:21:06', ''),
(20, '20', 16, 16, NULL, NULL, NULL, NULL, 'Research', 'pioneer', 0, NULL, NULL, 'Abiso', 'Jacob', 'abisodq@gmail.com', NULL, NULL, '1', '08033871468', NULL, 'Zenith', '2081648254', 'Abinokhauno oshiogwe Solomon ', NULL, NULL, NULL, NULL, '$2y$10$Kr2sgHmXBlLNtsFp3HtUCOLK12LiYrSUq6RwPw77yH42bzMjamxfW', '2019-03-29 06:20:12', '2019-03-29 08:21:32', NULL, '2019-03-29 12:21:32', ''),
(21, '21', 16, 16, NULL, NULL, NULL, NULL, 'Boss 1', 'pioneer', 0, NULL, NULL, 'Presley ', 'Ebibomoh ', 'pepeeboy946@gmail.com', NULL, NULL, '1', '09076338872', NULL, 'Guarantee Trust Bank', '0013039955', 'Presley Ebiabode Ebibomoh ', NULL, NULL, 'uploads/images/users/profile_pictures/IMG_20181223_211606.jpg', 'uploads/images/users/profile_pictures/IMG_20181223_211606_1.jpg', '$2y$10$ShUDXd2zdbtAZlxG.Nbze.MytaE5.0u.v7qgAJ2VlXuGxz4QAUtLW', '2019-03-29 06:23:20', '2019-03-29 08:21:50', NULL, '2019-03-29 12:21:50', ''),
(22, '22', 16, 16, NULL, NULL, NULL, NULL, 'Chinnel', 'pioneer', 0, NULL, NULL, 'Magdalene', 'Abinokhauno', 'omoh_real@yahoo.com', NULL, NULL, '1', '8034305099', NULL, 'GUARANTY TRUST BANK', '0019783802', 'MAGDALENE,ABINOKHAUNO', NULL, NULL, NULL, NULL, '$2y$10$ywA/upvaU4nFg1uGgXuTUOF5vQgolMIUyO2/CmDjlDaU/Q.fjwMo.', '2019-03-29 06:23:26', '2019-03-29 08:22:05', NULL, '2019-03-29 12:22:05', ''),
(23, '23', 16, 16, NULL, NULL, NULL, NULL, 'Efreda4real', 'pioneer', 0, NULL, NULL, 'Theodora', 'Egburedi', 'theodoraefreda2016@gmail.com', NULL, NULL, '1', '08063387640', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$kRs9fcV2b6vWXsEHc6besOs6Ud0JtezPZvNwOEADU7enLXkwnVjgG', '2019-03-29 06:58:53', '2019-03-29 08:22:21', NULL, '2019-03-29 12:22:21', ''),
(24, '24', 16, 16, NULL, NULL, NULL, NULL, 'Therian', 'pioneer', 0, NULL, NULL, 'Ijeoma', 'Oparaekocha', 'oparaekochat@gmail.com', NULL, NULL, '1f66c8ec22693be625a96ab7710acd5a', '08068473529', NULL, 'GTB', '0235506165', 'Oparaekocha Ijeoma', NULL, NULL, NULL, NULL, '$2y$10$l50JEA14LYvMyY6lEwlPI.QkK5nSQzGQvxXCEKFNzqorrBeHCJRfy', '2019-03-29 07:31:12', '2019-03-29 08:23:14', NULL, '2019-03-29 12:23:14', ''),
(25, '25', 16, 16, NULL, NULL, NULL, NULL, 'mountain', 'pioneer', 0, NULL, NULL, 'Ugwu', 'Edith', 'ugwuchinenye.e@gmail.com', NULL, NULL, '1', '07061894818', NULL, 'First Bank', '3024779666', 'Ugwu Chinenye Edith', NULL, NULL, NULL, NULL, '$2y$10$KBhjTvQYir0ojI.fQFmKL.c.n/v3PQbjfmglTo8uERAcvY2T.GQA6', '2019-03-29 08:14:36', '2019-03-29 09:26:16', NULL, '2019-03-29 13:26:16', ''),
(26, '26', 16, 16, NULL, NULL, NULL, NULL, 'Chimus', 'pioneer', 0, NULL, NULL, 'Nwosu', 'Anthonia', 'chimua12@gmail.com', NULL, NULL, '1', '08065839410', NULL, 'Access Bank ', '0049839432', 'Nwosu Anthonia', NULL, NULL, NULL, NULL, '$2y$10$y76f.s5gylXuvWvJwC1xMeR2VLMmhWLxFJM1IPP6/x8QluxI.67p6', '2019-03-29 08:16:32', '2019-03-29 09:45:01', NULL, '2019-03-29 13:45:01', ''),
(27, '27', 16, 16, NULL, NULL, NULL, NULL, 'LACHOICE', 'pioneer', 0, NULL, NULL, 'MIRIAM', 'CHUKWU', 'ADAEZEM980@GMAIL.COM', NULL, NULL, '1', '09099766534', NULL, 'Access bank', '0042683193', 'Miriam chukwu', NULL, NULL, NULL, NULL, '$2y$10$.gEdhnzmWxd.Dfy.af2NmOolFDw4gWOtdoRdSkWMVzKfBLjEyL/6u', '2019-03-29 08:42:09', '2019-03-29 12:14:47', NULL, '2019-03-29 16:14:47', ''),
(28, '28', 16, 16, NULL, NULL, NULL, NULL, 'Henry ', 'pioneer', 0, NULL, NULL, 'Henry ', 'Agbugba ', 'agbugbahenry@yahoo.com', NULL, NULL, '1', '08025401179', NULL, 'UBA PLC ', '2090559622', 'Agbugba Henry C. ', NULL, NULL, NULL, NULL, '$2y$10$0sfmAlwz3xmz5kmBkLdluef8IWvP026.OQFBWQwCFsbIKXTePk3bS', '2019-03-29 08:53:55', '2019-03-29 09:31:40', NULL, '2019-03-29 13:31:40', ''),
(29, '29', 16, 16, NULL, NULL, NULL, NULL, 'Michellemarcus', 'pioneer', 0, NULL, NULL, 'Michelle', 'Marcus', 'michellemarcus410@gmail.com', NULL, NULL, '1', '08036739668', NULL, 'Access Bank', '0019786803', 'Michelle Marcus', NULL, NULL, NULL, NULL, '$2y$10$ogmwLVkkpbPLUE9dH7B8J.Lt4PRPwL5qREYbUQ7IgHV.A.AvaNPnu', '2019-03-29 13:40:48', '2019-03-29 18:21:51', NULL, '2019-03-29 22:21:51', ''),
(30, '30', 18, 18, NULL, NULL, NULL, NULL, 'Happiness', 'pioneer', 0, NULL, NULL, 'Happiness', 'Okiaze', 'okiazehappiness@gmail.com', NULL, NULL, '1', '08037843243', NULL, 'Diamond', '0032802851', 'Okiaze Happiness U.', NULL, NULL, NULL, NULL, '$2y$10$W3gAW7vYv/EKC6PfDrk0l.ODhongQWVTPUFCSdtJj0lMCPBlH2hWG', '2019-04-01 12:26:16', '2019-04-01 17:15:04', NULL, '2019-04-01 21:15:04', ''),
(31, '31', 18, 18, NULL, NULL, NULL, NULL, 'Uigho ', 'pioneer', 0, NULL, NULL, 'Igho', 'Etinne ', 'igho.umukoro@yahoo.com', NULL, NULL, '1', '08055930852', NULL, 'Access', '0690885257', 'Igho Etinne', NULL, NULL, NULL, NULL, '$2y$10$Bc/TYAtCbXQykxSxet4NWe3WzbNqNmvDXPDPNCoC/lyzXE7i8nlFe', '2019-04-01 17:33:29', '2019-04-01 18:28:38', NULL, '2019-04-01 22:28:38', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `broadcast`
--
ALTER TABLE `broadcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_support`
--
ALTER TABLE `customers_support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_sms_notification`
--
ALTER TABLE `email_sms_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gh`
--
ALTER TABLE `gh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `level_income_report`
--
ALTER TABLE `level_income_report`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `commission_type` (`commission_type`,`owner_user_id`,`downline_id`) USING BTREE;

--
-- Indexes for table `matured_phs`
--
ALTER TABLE `matured_phs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ph_id` (`ph_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pair`
--
ALTER TABLE `pair`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ph_id` (`ph_id`),
  ADD KEY `gh_id` (`gh_id`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support_tickets`
--
ALTER TABLE `support_tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `Unique` (`mlm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `broadcast`
--
ALTER TABLE `broadcast`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers_support`
--
ALTER TABLE `customers_support`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_sms_notification`
--
ALTER TABLE `email_sms_notification`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gh`
--
ALTER TABLE `gh`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `level_income_report`
--
ALTER TABLE `level_income_report`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `matured_phs`
--
ALTER TABLE `matured_phs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pair`
--
ALTER TABLE `pair`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ph`
--
ALTER TABLE `ph`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `support_tickets`
--
ALTER TABLE `support_tickets`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
