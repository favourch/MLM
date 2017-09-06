<?php /* Smarty version Smarty-3.1.16, created on 2017-09-01 17:53:35
         compiled from "\xampp\htdocs\AMLM\\views\templates\admin\payment_gatway.tpl" */ ?>
<?php /*%%SmartyHeaderCode:925459a9627ef1d895-68933852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdfcc110c626b8d2619e97b7e3c915a456b7d505' => 
    array (
      0 => '\\xampp\\htdocs\\AMLM\\\\views\\templates\\admin\\payment_gatway.tpl',
      1 => 1504281213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '925459a9627ef1d895-68933852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_59a9627f002599_47565184',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a9627f002599_47565184')) {function content_59a9627f002599_47565184($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
       
       
       
       
       
       
       

<script src='js/New folder/cryptobox.min.js' type='text/javascript'></script>
</head>
<body style='font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#666;margin:0'>
<div align='center'>
<div style='width:100%;height:auto;line-height:50px;background-color:#f1f1f1;border-bottom:1px solid #ddd;color:#49abe9;font-size:18px;'>
 11. GoUrl <b>Pay-Per-Membership</b> Example. Use it on your website. 
 <div style='float:right;'><a style='font-size:15px;color:#389ad8;margin-right:20px' href='<<?php ?>?= "//".$_SERVER["HTTP_HOST"].str_replace(".php", "-multi.php", $_SERVER["REQUEST_URI"]); ?<?php ?>>'>Multiple Crypto</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/<<?php ?>?= strtolower($coinName) ?<?php ?>>-payment-gateway-api.html#p6'>PHP Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://github.com/cryptoapi/Bitcoin-Payment-Gateway-ASP.NET/tree/master/GoUrl/Views/Examples/PayPerMembership.cshtml'>ASP.NET Source</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://wordpress.org/plugins/gourl-bitcoin-payment-gateway-paid-downloads-membership/'>Wordpress</a><a style='font-size:15px;color:#389ad8;margin-right:20px' href='https://gourl.io/<<?php ?>?= strtolower($coinName) ?<?php ?>>-payment-gateway-api.html'>Other Examples</a></div>
</div>
<br>
<h1>Example - Upgrading to a Premium Account</h1>

<!--<<?php ?>?php if ($box->is_paid()): ?<?php ?>>-->

 <!-- User already paid premium membership -->
 <!-- You can use this function - $box->is_paid() on all other your premium webpages, it will return true during all user paid period (1 month) --> 
 <!-- Your Premium Pages Code Here -->

 <br><br><br>
 <<?php ?>?php echo $message; ?<?php ?>>
 <br><br><br>
 
 
<<?php ?>?php else: ?<?php ?>>

  <!-- Awaiting Payment -->
 <a href='#gourlcryptocoins'><img alt='Awaiting Payment - Cryptocoin Pay Per Membership' border='0' src='https://gourl.io/images/example10.png'></a>
 <br><br><br> 
 <h3>Upgrade Your Membership Now ( $<<?php ?>?php echo $amountUSD; ?<?php ?>> per <<?php ?>?php echo $period; ?<?php ?>> ) - </h3>
 
<<?php ?>?php endif; ?<?php ?>>  

 <div style='font-size:12px;margin:50px 0 5px 370px'>Language: &#160; <<?php ?>?php echo $languages_list; ?<?php ?>></div>

 
</div><br><br><br><br><br><br>
<div style='position:absolute;left:0;'><a target="_blank" href="http://validator.w3.org/check?uri=<<?php ?>?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?<?php ?>>"><img src="https://gourl.io/images/w3c.png" alt="Valid HTML 4.01 Transitional"></a></div>

          </div>
        </div>
        <!-- /page content -->
       <?php echo $_smarty_tpl->getSubTemplate ("admin/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
