<?php
/*
 * Author: Virat Gaywala
 * Created on 12-JAN-2016
 * Purpose : define filenames used in iValuation Product
 * Last Modified By: Virat Gaywala
 * Last MOdified Date: 12-JAN-2016
*/

//login/logout file
define('FILENAME_LOGOUT','logout.php');
define('FILENAME_LOGIN','login.php');

//Constant for date
date_default_timezone_set('Asia/Calcutta');
 $date =  Date('d-m-Y h:m A');
define('Date',$date);
// $dateFormat = date_format($date,"d-M-Y  H:i A");
define('dateFormat',"d-M-Y g:i A");

// table name files
define('FILENAME_TABLENAMES','configTablename.php');

// stylesheet file
define('FILENAME_STYLESHEET', '');

// class files
define('FILENAME_DATABASE_CONNECTION', 'mysqlDb.cls.php');
define('FILENAME_PHP_MAILER', 'phpmailer.cls.php');

// Functions file
define('FILENAME_GENERAL', 'general.fn.php');
define('FILENAME_PASSWORD_FUNCTION','password.php');
define('FILENAME_ENCRYDECRY_FUNCTION','encryptDeccrypt.php');

// javascripts file
define('FILENAME_VALIDATION', 'generalValidation.js');

// default files
define('FILENAME_DEFAULT', 'index.php');

// common files
define('FILENAME_TOP', 'top.php');
define('FILENAME_ENGLISH', 'english.php');

define('FILENAME_LINK',DIR_WS_INCLUDES.'link.php');
define('FILENAME_TOP_BANNER',DIR_WS_INCLUDES.'topBanner.php');
define('FILENAME_SIDEBAR',DIR_WS_INCLUDES.'sidebar.php');
define('FILENAME_MAIN_MENU',DIR_WS_INCLUDES.'mainMenu.php');
define('FILENAME_CENTER',DIR_WS_INCLUDES.'center.php');
define('FILENAME_FOOTER',DIR_WS_INCLUDES.'footer.php');
define('FILENAME_DASHBOARD',DIR_WS_INCLUDES.'dashboard.php');
define('FILENAME_NEW_VALUATION',DIR_WS_INCLUDES.'newValuation.php');
define('FILENAME_NEW_QUEUE',DIR_WS_INCLUDES.'newQueue.php');
define('FILENAME_NEW',DIR_WS_INCLUDES.'newEventStatus.php');
define('FILENAME_EALL',DIR_WS_INCLUDES.'allEventStatus.php');
define('FILENAME_WIP_QUEUE',DIR_WS_INCLUDES.'wipQueue.php');
define('FILENAME_COMPLETED_QUEUE',DIR_WS_INCLUDES.'completedQueue.php');
define('FILENAME_PAID',DIR_WS_INCLUDES.'paidAccounting.php');
define('FILENAME_UNPAID',DIR_WS_INCLUDES.'unpaidAccounting.php');
define('FILENAME_VALUATION',DIR_WS_INCLUDES.'valuation.php');
define('FILENAME_VALUATION_DETAILS',DIR_WS_INCLUDES.'valuationDetails.php');
define('FILENAME_UPCOMING',DIR_WS_INCLUDES.'upcomingEventStatus.php');
define('FILENAME_COMPLETED',DIR_WS_INCLUDES.'completedEventStatus.php');
define('FILENAME_CATEGORY',DIR_WS_INCLUDES.'categoryEquipments.php');
define('FILENAME_EQUIPALL',DIR_WS_INCLUDES.'allEquipments.php');
define('FILENAME_ACCESSORIES',DIR_WS_INCLUDES.'accessoriesEquipments.php');
define('FILENAME_STAFFADD',DIR_WS_INCLUDES.'addEditStaff.php');
define('FILENAME_ALL',DIR_WS_INCLUDES.'addEditEquipments.php');
define('FILENAME_STAFFALL',DIR_WS_INCLUDES.'allStaff.php');
define('FILENAME_CALENDAR',DIR_WS_INCLUDES.'myCalendar.php');
define('FILENAME_MYPROFILE',DIR_WS_INCLUDES.'myProfile.php');
define('FILENAME_ADDEVENTS',DIR_WS_INCLUDES.'newEvents.php');
define('FILENAME_VENDORALL',DIR_WS_INCLUDES.'allVendors.php');
define('FILENAME_VENDORDETAIL',DIR_WS_INCLUDES.'detailsVendors.php');
define('FILENAME_VENDORPAID',DIR_WS_INCLUDES.'vendorPaidAccounting.php');
define('FILENAME_VENDORUNPAID',DIR_WS_INCLUDES.'vendorUnpaidAccounting.php');
define('FILENAME_COMPANYINFO',DIR_WS_INCLUDES.'companyInfoSettings.php');
define('FILENAME_HOLIDAY',DIR_WS_INCLUDES.'holidaySettings.php');
define('FILENAME_EVENTDETAIL',DIR_WS_INCLUDES.'eventDetail.php');
define('FILENAME_ENQUIRY',DIR_WS_INCLUDES.'enquiry.php');
define('FILENAME_ENQUIRYFORM',DIR_WS_INCLUDES.'enquiryForm.php');
define('FILENAME_VERTICALTIMELINE',DIR_WS_INCLUDES.'verticalTimeline.php');
define('FILENAME_ADDCOMPANY',DIR_WS_INCLUDES.'addCompanySettings.php');
define('FILENAME_ADDOPTION',DIR_WS_INCLUDES.'addOptionSettings.php');
define('FILENAME_INVOICE',DIR_WS_INCLUDES.'invoiceList.php');

define('FILENAME_TRANSACTION',DIR_WS_INCLUDES.'transactionDetail.php');

define('FILENAME_CATEGORYNEW',DIR_WS_INCLUDES.'categoryNew.php');
define('FILENAME_SUBCATEGORY',DIR_WS_INCLUDES.'categorySub.php');

define('FILENAME_TEMPLATE',DIR_WS_INCLUDES.'templateSettings.php');

define('FILENAME_RESOURCES',DIR_WS_INCLUDES.'resourcesCategory.php');

//registration files
//define('FILENAME_REGISTRATION',DIR_WS_INCLUDES.'registration.php');
//define('FILENAME_REGISTER_POST','registerFormPost.php');
//define('FILENAME_REGISTER_ACTIVE','registerActivation.php');
?>