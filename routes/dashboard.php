<?php

/**
 * 设置自定义后台入口路由
 */

Route::namespace('App\Modules\Admin\Controllers')->prefix(ADMIN_PATH)->group(function () {

    Route::any('/', function () {
        return redirect()->route('dashboard');
    });
    Route::any('index.php', 'IndexController@actionIndex')->name('dashboard');
    Route::any('account_log.php', 'AccountLogController@actionIndex');
    Route::any('ad_position.php', 'AdPositionController@actionIndex');
    Route::any('admin_logs.php', 'AdminLogsController@actionIndex');
    Route::any('ads.php', 'AdsController@actionIndex');
    Route::any('adsense.php', 'AdsenseController@actionIndex');
    Route::any('affiliate_ck.php', 'AffiliateCkController@actionIndex');
    Route::any('affiliate.php', 'AffiliateController@actionIndex');
    Route::any('agency.php', 'AgencyController@actionIndex');
    Route::any('area_manage.php', 'AreaManageController@actionIndex');
    Route::any('article_auto.php', 'ArticleAutoController@actionIndex');
    Route::any('article.php', 'ArticleController@actionIndex');
    Route::any('articlecat.php', 'ArticlecatController@actionIndex');
    Route::any('attention_list.php', 'AttentionListController@actionIndex');
    Route::any('attribute.php', 'AttributeController@actionIndex');
    Route::any('auction.php', 'AuctionController@actionIndex');
    Route::any('bonus.php', 'BonusController@actionIndex');
    Route::any('brand.php', 'BrandController@actionIndex');
    Route::any('captcha.php', 'CaptchaController@actionIndex');
    Route::any('captcha_manage.php', 'CaptchaManageController@actionIndex');
    Route::any('card.php', 'CardController@actionIndex');
    Route::any('category.php', 'CategoryController@actionIndex');
    Route::any('check_file_priv.php', 'CheckFilePrivController@actionIndex');
    Route::any('cloud.php', 'CloudController@actionIndex');
    Route::any('comment_manage.php', 'CommentManageController@actionIndex');
    Route::any('convert.php', 'ConvertController@actionIndex');
    Route::any('cron.php', 'CronController@actionIndex');
    Route::any('database.php', 'DatabaseController@actionIndex');
    Route::any('edit_languages.php', 'EditLanguagesController@actionIndex');
    Route::any('email_list.php', 'EmailListController@actionIndex');
    Route::any('exchange_goods.php', 'ExchangeGoodsController@actionIndex');
    Route::any('favourable.php', 'FavourableController@actionIndex');
    Route::any('filecheck.php', 'FilecheckController@actionIndex');
    Route::any('flashplay.php', 'FlashplayController@actionIndex');
    Route::any('flow_stats.php', 'FlowStatsController@actionIndex');
    Route::any('friend_link.php', 'FriendLinkController@actionIndex');
    Route::any('gen_goods_script.php', 'GenGoodsScriptController@actionIndex');
    Route::any('get_password.php', 'GetPasswordController@actionIndex');
    Route::any('goods_auto.php', 'GoodsAutoController@actionIndex');
    Route::any('goods_batch.php', 'GoodsBatchController@actionIndex');
    Route::any('goods_booking.php', 'GoodsBookingController@actionIndex');
    Route::any('goods.php', 'GoodsController@actionIndex');
    Route::any('goods_export.php', 'GoodsExportController@actionIndex');
    Route::any('goods_type.php', 'GoodsTypeController@actionIndex');
    Route::any('group_buy.php', 'GroupBuyController@actionIndex');
    Route::any('guest_stats.php', 'GuestStatsController@actionIndex');
    Route::any('help.php', 'HelpController@actionIndex');
    Route::any('integrate.php', 'IntegrateController@actionIndex');
    Route::any('license.php', 'LicenseController@actionIndex');
    Route::any('magazine_list.php', 'MagazineListController@actionIndex');
    Route::any('mail_template.php', 'MailTemplateController@actionIndex');
    Route::any('message.php', 'MessageController@actionIndex');
    Route::any('navigator.php', 'NavigatorController@actionIndex');
    Route::any('order.php', 'OrderController@actionIndex');
    Route::any('order_stats.php', 'OrderStatsController@actionIndex');
    Route::any('pack.php', 'PackController@actionIndex');
    Route::any('package.php', 'PackageController@actionIndex');
    Route::any('patch_num.php', 'PatchNumController@actionIndex');
    Route::any('payment.php', 'PaymentController@actionIndex');
    Route::any('picture_batch.php', 'PictureBatchController@actionIndex');
    Route::any('privilege.php', 'PrivilegeController@actionIndex');
    Route::any('receive.php', 'ReceiveController@actionIndex');
    Route::any('reg_fields.php', 'RegFieldsController@actionIndex');
    Route::any('role.php', 'RoleController@actionIndex');
    Route::any('sale_general.php', 'SaleGeneralController@actionIndex');
    Route::any('sale_list.php', 'SaleListController@actionIndex');
    Route::any('sale_order.php', 'SaleOrderController@actionIndex');
    Route::any('search_log.php', 'SearchLogController@actionIndex');
    Route::any('searchengine_stats.php', 'SearchengineStatsController@actionIndex');
    Route::any('send.php', 'SendController@actionIndex');
    Route::any('shipping_area.php', 'ShippingAreaController@actionIndex');
    Route::any('shipping.php', 'ShippingController@actionIndex');
    Route::any('shop_config.php', 'ShopConfigController@actionIndex');
    Route::any('shophelp.php', 'ShophelpController@actionIndex');
    Route::any('shopinfo.php', 'ShopinfoController@actionIndex');
    Route::any('sitemap.php', 'SitemapController@actionIndex');
    Route::any('sms.php', 'SmsController@actionIndex');
    Route::any('snatch.php', 'SnatchController@actionIndex');
    Route::any('sql.php', 'SqlController@actionIndex');
    Route::any('suppliers.php', 'SuppliersController@actionIndex');
    Route::any('suppliers_goods.php', 'SuppliersGoodsController@actionIndex');
    Route::any('tag_manage.php', 'TagManageController@actionIndex');
    Route::any('template.php', 'TemplateController@actionIndex');
    Route::any('topic.php', 'TopicController@actionIndex');
    Route::any('user_account.php', 'UserAccountController@actionIndex');
    Route::any('user_account_manage.php', 'UserAccountManageController@actionIndex');
    Route::any('user_msg.php', 'UserMsgController@actionIndex');
    Route::any('user_rank.php', 'UserRankController@actionIndex');
    Route::any('users.php', 'UsersController@actionIndex');
    Route::any('users_order.php', 'UsersOrderController@actionIndex');
    Route::any('view_sendlist.php', 'ViewSendlistController@actionIndex');
    Route::any('virtual_card.php', 'VirtualCardController@actionIndex');
    Route::any('visit_sold.php', 'VisitSoldController@actionIndex');
    Route::any('vote.php', 'VoteController@actionIndex');
    Route::any('wholesale.php', 'WholesaleController@actionIndex');

});
