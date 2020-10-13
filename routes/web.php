<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['prefix' => '/',							'as' => 'frontend.' , 					'namespace' => 'Frontend\\'],function(){
	Route::get('/', 									['as' => 'home' , 						'uses' => 'HomeController@index']);

	Route::get('/about-us', 							['as' => 'about' , 						'uses' => 'HomeController@about']);
	Route::get('/president', 							['as' => 'president' , 						'uses' => 'HomeController@president']);

	Route::get('/presidnet/{id}', 								['as' => 'about.single' , 					'uses' => 'HomeController@contributorProfile']);

	Route::get('/join', 							['as' => 'join' , 						'uses' => 'HomeController@join']);
	Route::get('/funding', 							['as' => 'funding' , 						'uses' => 'HomeController@funding']);

	Route::get('/rcc', 							['as' => 'rcc' , 						'uses' => 'HomeController@rcc']);
	Route::get('/rotaract', 							['as' => 'rotaract' , 						'uses' => 'HomeController@rotaract']);
	Route::get('/interact', 							['as' => 'interact' , 						'uses' => 'HomeController@interact']);
	Route::get('/opportunity', 							['as' => 'opportunity' , 						'uses' => 'HomeController@opportunity']);
	Route::get('/members', 								['as' => 'members' , 					'uses' => 'HomeController@members']);
	Route::get('/charter', 								['as' => 'charter' , 					'uses' => 'HomeController@charter']);
	Route::get('/founder', 								['as' => 'founder' , 					'uses' => 'HomeController@founder']);
	Route::get('/phf', 								['as' => 'phf' , 					'uses' => 'HomeController@phf']);

	Route::get('/committee', 								['as' => 'committee' , 					'uses' => 'HomeController@committee']);
	Route::get('/members/{id}', 								['as' => 'member.single' , 					'uses' => 'HomeController@memberProfile']);
	Route::get('/history', 								['as' => 'history' , 					'uses' => 'HomeController@history']);
	Route::get('/memorandum', 								['as' => 'memorandum' , 					'uses' => 'HomeController@memorandum']);
	Route::get('/meeting', 								['as' => 'meeting' , 					'uses' => 'HomeController@meeting']);
	Route::get('/boardmembers', 								['as' => 'boardmembers' , 					'uses' => 'HomeController@boardmembers']);
	Route::get('/events', 								['as' => 'events' , 					'uses' => 'HomeController@events']);
	Route::get('/events/upcoming', 						['as' => 'events.upcoming' , 			'uses' => 'HomeController@upcomingEvents']);
	Route::get('/news', 								['as' => 'news' , 						'uses' => 'HomeController@news']);
	Route::get('/notice', 								['as' => 'notice' , 						'uses' => 'HomeController@notice']);
	Route::get('/bulletin', 								['as' => 'bulletin' , 						'uses' => 'HomeController@bulletin']);

	Route::get('/contact-us', 							['as' => 'contact' , 					'uses' => 'HomeController@contact']);
	Route::get('/gallery', 								['as' => 'gallery' , 					'uses' => 'HomeController@gallery']);
	Route::get('/gallery/{id}', 								['as' => 'gallery.single' , 					'uses' => 'HomeController@gallerySingle']);
	Route::get('/cause', 								['as' => 'cause' , 					'uses' => 'HomeController@cause']);
	Route::get('/cause/{id}', 								['as' => 'cause.single' , 					'uses' => 'HomeController@causeSingle']);
	Route::get('/campaign', 								['as' => 'campaign' , 					'uses' => 'HomeController@campaign']);
	Route::get('/campaign/{id}', 								['as' => 'campaign.single' , 					'uses' => 'HomeController@campaignSingle']);

	Route::get('/privacy-policy', 						['as' => 'privacy-policy' , 			'uses' => 'HomeController@privacyPolicy']);
	Route::get('/resources', 							['as' => 'resources' , 					'uses' => 'HomeController@resources']);

	Route::get('event/{slug}',							['as'=>'event.single',					'uses' => 'HomeController@singleEvent']);
	Route::get('news/{slug}',							['as'=>'news.single',					'uses' => 'HomeController@singleNews']);
	Route::get('notice/{slug}',							['as'=>'notice.single',					'uses' => 'HomeController@singleNotice']);



	Route::get('organized-pathway', ['as' => 'organized-pathway','uses'=>'HomeController@organizedPathway']);
	Route::get('professional-development', ['as' => 'professional-development','uses'=>'HomeController@professionalDevelopment']);
	Route::get('information-center', ['as' => 'information-center','uses'=>'HomeController@informationCenter']);
	Route::get('aid-in-economic-prosperity-of-nepal', ['as' => 'aid-economic','uses'=>'HomeController@aidEconomic']);

});



Route::group(['prefix' => 'dashboard/' ,'as'=> 'dashboard.' , 'namespace' => 'Dashboard\\'],function(){
	
	Route::get('home',									['as' => 'dashboard',						'uses' => 'HomeController@index']);

	Route::get('all-admins',							['as'=>'admin',								'uses' => 'AdminController@index']);
	Route::get('admin/create',							['as'=>'admin.create',						'uses' => 'AdminController@create']);
	Route::post('admin/store',							['as'=>'admin.store',						'uses' => 'AdminController@store']);
	Route::get('admin/delete/{id}',						['as'=>'admin.delete',						'uses' => 'AdminController@destroy']);
	Route::get('admin/change-password',					['as'=>'admin.change-password',				'uses' => 'AdminController@passwordForm']);
	Route::post('admin/change-password',				['as'=>'admin.reset-password',				'uses' => 'AdminController@changePassword']);
	Route::get('admin/change-username',					['as'=>'admin.change-username',				'uses' => 'AdminController@usernameForm']);
	Route::post('admin/change-username',				['as'=>'admin.reset-username',				'uses' => 'AdminController@changeUsername']);
		


	
	Route::get('slider',								['as'=>'slider',							'uses' => 'SliderController@index']);
	Route::get('slider/create',							['as'=>'slider.create',						'uses' => 'SliderController@create']);
	Route::post('slider/store',							['as'=>'slider.store',						'uses' => 'SliderController@store']);
	Route::get('slider/edit/{id}',						['as'=>'slider.edit',						'uses' => 'SliderController@edit']);
	Route::post('slider/update/{id}',					['as'=>'slider.update',						'uses' => 'SliderController@update']);
	Route::get('slider/delete/{id}',					['as'=>'slider.delete',						'uses' => 'SliderController@destroy']);

	Route::get('link',									['as'=>'link',								'uses' => 'LinkController@index']);
	Route::get('link/create',							['as'=>'link.create',						'uses' => 'LinkController@create']);
	Route::post('link/store',							['as'=>'link.store',						'uses' => 'LinkController@store']);
	Route::get('link/edit/{id}',						['as'=>'link.edit',							'uses' => 'LinkController@edit']);
	Route::post('link/update/{id}',						['as'=>'link.update',						'uses' => 'LinkController@update']);
	Route::get('link/delete/{id}',						['as'=>'link.delete',						'uses' => 'LinkController@destroy']);
	
	Route::get('about',									['as'=>'about',								'uses' => 'AboutController@index']);
	Route::get('about/create',							['as'=>'about.create',						'uses' => 'AboutController@create']);
	Route::post('about/store',							['as'=>'about.store',						'uses' => 'AboutController@store']);
	Route::get('about/edit/{id}',						['as'=>'about.edit',						'uses' => 'AboutController@edit']);
	Route::post('about/update/{id}',					['as'=>'about.update',						'uses' => 'AboutController@update']);
	Route::get('about/delete/{id}',						['as'=>'about.delete',						'uses' => 'AboutController@destroy']);
	Route::get('about/show/{id}',		    			['as'=>'about.show',						'uses' => 'AboutController@show']);

	Route::get('memberdetail',									['as'=>'memberdetail',								'uses' => 'MemberdetailController@index']);
	Route::get('memberdetail/create',							['as'=>'memberdetail.create',						'uses' => 'MemberdetailController@create']);
	Route::post('memberdetail/store',							['as'=>'memberdetail.store',						'uses' => 'MemberdetailController@store']);
	Route::get('memberdetail/edit/{id}',						['as'=>'memberdetail.edit',						'uses' => 'MemberdetailController@edit']);
	Route::post('memberdetail/update/{id}',					['as'=>'memberdetail.update',						'uses' => 'MemberdetailController@update']);
	Route::get('memberdetail/delete/{id}',						['as'=>'memberdetail.delete',						'uses' => 'MemberdetailController@destroy']);
	Route::get('memberdetail/show/{id}',		    			['as'=>'memberdetail.show',						'uses' => 'MemberdetailController@show']);

	Route::get('charter',									['as'=>'charter',								'uses' => 'CharterController@index']);
	Route::get('charter/create',							['as'=>'charter.create',						'uses' => 'CharterController@create']);
	Route::post('charter/store',							['as'=>'charter.store',						'uses' => 'CharterController@store']);
	Route::get('charter/edit/{id}',						['as'=>'charter.edit',						'uses' => 'CharterController@edit']);
	Route::post('charter/update/{id}',					['as'=>'charter.update',						'uses' => 'CharterController@update']);
	Route::get('charter/delete/{id}',						['as'=>'charter.delete',						'uses' => 'CharterController@destroy']);
	Route::get('charter/show/{id}',		    			['as'=>'charter.show',						'uses' => 'CharterController@show']);

	Route::get('founder',									['as'=>'founder',								'uses' => 'FounderController@index']);
	Route::get('founder/create',							['as'=>'founder.create',						'uses' => 'FounderController@create']);
	Route::post('founder/store',							['as'=>'founder.store',						'uses' => 'FounderController@store']);
	Route::get('founder/edit/{id}',						['as'=>'founder.edit',						'uses' => 'FounderController@edit']);
	Route::post('founder/update/{id}',					['as'=>'founder.update',						'uses' => 'FounderController@update']);
	Route::get('founder/delete/{id}',						['as'=>'founder.delete',						'uses' => 'FounderController@destroy']);
	Route::get('founder/show/{id}',		    			['as'=>'founder.show',						'uses' => 'FounderController@show']);

	Route::get('phf',									['as'=>'phf',								'uses' => 'PhfController@index']);
	Route::get('phf/create',							['as'=>'phf.create',						'uses' => 'PhfController@create']);
	Route::post('phf/store',							['as'=>'phf.store',						'uses' => 'PhfController@store']);
	Route::get('phf/edit/{id}',						['as'=>'phf.edit',						'uses' => 'PhfController@edit']);
	Route::post('phf/update/{id}',					['as'=>'phf.update',						'uses' => 'PhfController@update']);
	Route::get('phf/delete/{id}',						['as'=>'phf.delete',						'uses' => 'PhfController@destroy']);
	Route::get('phf/show/{id}',		    			['as'=>'phf.show',						'uses' => 'PhfController@show']);

	Route::get('contributor',									['as'=>'contributor',								'uses' => 'ContributorController@index']);
	Route::get('contributor/create',							['as'=>'contributor.create',						'uses' => 'ContributorController@create']);
	Route::post('contributor/store',							['as'=>'contributor.store',						'uses' => 'ContributorController@store']);
	Route::get('contributor/edit/{id}',						['as'=>'contributor.edit',						'uses' => 'ContributorController@edit']);
	Route::post('contributor/update/{id}',					['as'=>'contributor.update',						'uses' => 'ContributorController@update']);
	Route::get('contributor/delete/{id}',						['as'=>'contributor.delete',						'uses' => 'ContributorController@destroy']);
	Route::get('contributor/show/{id}',		    			['as'=>'contributor.show',						'uses' => 'ContributorController@show']);


	Route::get('history',									['as'=>'history',								'uses' => 'HistoryController@index']);
	Route::get('history/create',							['as'=>'history.create',						'uses' => 'HistoryController@create']);
	Route::post('history/store',							['as'=>'history.store',						'uses' => 'HistoryController@store']);
	Route::get('history/edit/{id}',						['as'=>'history.edit',						'uses' => 'HistoryController@edit']);
	Route::post('history/update/{id}',					['as'=>'history.update',						'uses' => 'HistoryController@update']);
	Route::get('history/delete/{id}',						['as'=>'history.delete',						'uses' => 'HistoryController@destroy']);
	Route::get('history/show/{id}',		    			['as'=>'history.show',						'uses' => 'HistoryController@show']);

	Route::get('memorandum',									['as'=>'memorandum',								'uses' => 'MemorandumController@index']);
	Route::get('memorandum/create',							['as'=>'memorandum.create',						'uses' => 'MemorandumController@create']);
	Route::post('memorandum/store',							['as'=>'memorandum.store',						'uses' => 'MemorandumController@store']);
	Route::get('memorandum/edit/{id}',						['as'=>'memorandum.edit',						'uses' => 'MemorandumController@edit']);
	Route::post('memorandum/update/{id}',					['as'=>'memorandum.update',						'uses' => 'MemorandumController@update']);
	Route::get('memorandum/delete/{id}',						['as'=>'memorandum.delete',						'uses' => 'MemorandumController@destroy']);
	Route::get('memorandum/show/{id}',		    			['as'=>'memorandum.show',						'uses' => 'MemorandumController@show']);

	Route::get('meeting',									['as'=>'meeting',								'uses' => 'MeetingController@index']);
	Route::get('meeting/create',							['as'=>'meeting.create',						'uses' => 'MeetingController@create']);
	Route::post('meeting/store',							['as'=>'meeting.store',						'uses' => 'MeetingController@store']);
	Route::get('meeting/edit/{id}',						['as'=>'meeting.edit',						'uses' => 'MeetingController@edit']);
	Route::post('meeting/update/{id}',					['as'=>'meeting.update',						'uses' => 'MeetingController@update']);
	Route::get('meeting/delete/{id}',						['as'=>'meeting.delete',						'uses' => 'MeetingController@destroy']);
	Route::get('meeting/show/{id}',		    			['as'=>'meeting.show',						'uses' => 'MeetingController@show']);

	Route::get('cause',									['as'=>'cause',								'uses' => 'CauseController@index']);
	Route::get('cause/create',							['as'=>'cause.create',						'uses' => 'CauseController@create']);
	Route::post('cause/store',							['as'=>'cause.store',						'uses' => 'CauseController@store']);
	Route::get('cause/edit/{id}',						['as'=>'cause.edit',						'uses' => 'CauseController@edit']);
	Route::post('cause/update/{id}',					['as'=>'cause.update',						'uses' => 'CauseController@update']);
	Route::get('cause/delete/{id}',						['as'=>'cause.delete',						'uses' => 'CauseController@destroy']);
	Route::get('cause/show/{id}',		    			['as'=>'cause.show',						'uses' => 'CauseController@show']);

	Route::get('campaign',									['as'=>'campaign',								'uses' => 'CampaignController@index']);
	Route::get('campaign/create',							['as'=>'campaign.create',						'uses' => 'CampaignController@create']);
	Route::post('campaign/store',							['as'=>'campaign.store',						'uses' => 'CampaignController@store']);
	Route::get('campaign/edit/{id}',						['as'=>'campaign.edit',						'uses' => 'CampaignController@edit']);
	Route::post('campaign/update/{id}',					['as'=>'campaign.update',						'uses' => 'CampaignController@update']);
	Route::get('campaign/delete/{id}',						['as'=>'campaign.delete',						'uses' => 'CampaignController@destroy']);
	Route::get('campaign/show/{id}',		    			['as'=>'campaign.show',						'uses' => 'CampaignController@show']);

	Route::get('join',									['as'=>'join',								'uses' => 'JoinController@index']);
	Route::get('join/create',							['as'=>'join.create',						'uses' => 'JoinController@create']);
	Route::post('join/store',							['as'=>'join.store',						'uses' => 'JoinController@store']);
	Route::get('join/edit/{id}',						['as'=>'join.edit',						'uses' => 'JoinController@edit']);
	Route::post('join/update/{id}',					['as'=>'join.update',						'uses' => 'JoinController@update']);
	Route::get('join/delete/{id}',						['as'=>'join.delete',						'uses' => 'JoinController@destroy']);
	Route::get('join/show/{id}',		    			['as'=>'join.show',						'uses' => 'JoinController@show']);

	Route::get('rotaract',									['as'=>'rotaract',								'uses' => 'RotaractController@index']);
	Route::get('rotaract/create',							['as'=>'rotaract.create',						'uses' => 'RotaractController@create']);
	Route::post('rotaract/store',							['as'=>'rotaract.store',						'uses' => 'RotaractController@store']);
	Route::get('rotaract/edit/{id}',						['as'=>'rotaract.edit',						'uses' => 'RotaractController@edit']);
	Route::post('rotaract/update/{id}',					['as'=>'rotaract.update',						'uses' => 'RotaractController@update']);
	Route::get('rotaract/delete/{id}',						['as'=>'rotaract.delete',						'uses' => 'RotaractController@destroy']);
	Route::get('rotaract/show/{id}',		    			['as'=>'rotaract.show',						'uses' => 'RotaractController@show']);

	Route::get('interact',									['as'=>'interact',								'uses' => 'InteractController@index']);
	Route::get('interact/create',							['as'=>'interact.create',						'uses' => 'InteractController@create']);
	Route::post('interact/store',							['as'=>'interact.store',						'uses' => 'InteractController@store']);
	Route::get('interact/edit/{id}',						['as'=>'interact.edit',						'uses' => 'InteractController@edit']);
	Route::post('interact/update/{id}',					['as'=>'interact.update',						'uses' => 'InteractController@update']);
	Route::get('interact/delete/{id}',						['as'=>'interact.delete',						'uses' => 'InteractController@destroy']);
	Route::get('interact/show/{id}',		    			['as'=>'interact.show',						'uses' => 'InteractController@show']);

	Route::get('rcc',									['as'=>'rcc',								'uses' => 'RccController@index']);
	Route::get('rcc/create',							['as'=>'rcc.create',						'uses' => 'RccController@create']);
	Route::post('rcc/store',							['as'=>'rcc.store',						'uses' => 'RccController@store']);
	Route::get('rcc/edit/{id}',						['as'=>'rcc.edit',						'uses' => 'RccController@edit']);
	Route::post('rcc/update/{id}',					['as'=>'rcc.update',						'uses' => 'RccController@update']);
	Route::get('rcc/delete/{id}',						['as'=>'rcc.delete',						'uses' => 'RccController@destroy']);
	Route::get('rcc/show/{id}',		    			['as'=>'rcc.show',						'uses' => 'RccController@show']);

	Route::get('opportunity',									['as'=>'opportunity',								'uses' => 'OpportunityController@index']);
	Route::get('opportunity/create',							['as'=>'opportunity.create',						'uses' => 'OpportunityController@create']);
	Route::post('opportunity/store',							['as'=>'opportunity.store',						'uses' => 'OpportunityController@store']);
	Route::get('opportunity/edit/{id}',						['as'=>'opportunity.edit',						'uses' => 'OpportunityController@edit']);
	Route::post('opportunity/update/{id}',					['as'=>'opportunity.update',						'uses' => 'OpportunityController@update']);
	Route::get('opportunity/delete/{id}',						['as'=>'opportunity.delete',						'uses' => 'OpportunityController@destroy']);
	Route::get('opportunity/show/{id}',		    			['as'=>'opportunity.show',						'uses' => 'OpportunityController@show']);

	Route::get('member',								['as'=>'member',							'uses' => 'MemberController@index']);
	Route::get('member/create',							['as'=>'member.create',						'uses' => 'MemberController@create']);
	Route::post('member/store',							['as'=>'member.store',						'uses' => 'MemberController@store']);
	Route::get('member/edit/{id}',						['as'=>'member.edit',						'uses' => 'MemberController@edit']);
	Route::post('member/update/{id}',					['as'=>'member.update',						'uses' => 'MemberController@update']);
	Route::get('member/delete/{id}',					['as'=>'member.delete',						'uses' => 'MemberController@destroy']);
	Route::get('member/show/{id}',		    			['as'=>'member.show',						'uses' => 'MemberController@show']);
	Route::post('member/import',		    			['as'=>'member.import',						'uses' => 'MemberController@import']);
	Route::post('member/update-memberships',		    ['as'=>'member.update-memberships',			'uses' => 'MemberController@updateMembership']);
	
	Route::get('funding',								['as'=>'funding',							'uses' => 'FundingController@index']);
	Route::get('funding/create',						['as'=>'funding.create',						'uses' => 'FundingController@create']);
	Route::post('funding/store',						['as'=>'funding.store',						'uses' => 'FundingController@store']);
	Route::get('funding/edit/{id}',						['as'=>'funding.edit',						'uses' => 'FundingController@edit']);
	Route::post('funding/update/{id}',					['as'=>'funding.update',						'uses' => 'FundingController@update']);
	Route::get('funding/delete/{id}',					['as'=>'funding.delete',						'uses' => 'FundingController@destroy']);
	Route::get('funding/show/{id}',		    			['as'=>'funding.show',						'uses' => 'FundingController@show']);

	Route::get('contact',								['as'=>'contact',							'uses' => 'ContactController@index']);
	Route::get('contact/create',						['as'=>'contact.create',					'uses' => 'ContactController@create']);
	Route::post('contact/store',						['as'=>'contact.store',						'uses' => 'ContactController@store']);
	Route::get('contact/delete/{id}',					['as'=>'contact.delete',					'uses' => 'ContactController@destroy']);
	Route::get('contact/show/{id}',		    			['as'=>'contact.show',						'uses' => 'ContactController@show']);
	Route::get('contact/{id}/reply',		    		['as'=>'contact.reply',						'uses' => 'ContactController@reply']);
	
	Route::get('gallery',								['as'=>'gallery',							'uses' => 'GalleryController@index']);
	Route::get('gallery/create',						['as'=>'gallery.create',					'uses' => 'GalleryController@create']);
	Route::post('gallery/store',						['as'=>'gallery.store',						'uses' => 'GalleryController@store']);
	Route::get('gallery/edit/{id}',						['as'=>'gallery.edit',						'uses' => 'GalleryController@edit']);
	Route::post('gallery/update/{id}',					['as'=>'gallery.update',					'uses' => 'GalleryController@update']);
	Route::get('gallery/delete/{id}',					['as'=>'gallery.delete',					'uses' => 'GalleryController@destroy']);
	Route::get('gallery/show/{id}',		    			['as'=>'gallery.show',						'uses' => 'GalleryController@show']);
	Route::get('gallery/{id}/create-gallery',			['as'=>'gallery.gallery.create',			'uses' => 'GalleryController@createImage']);
	Route::post('gallery/{id}/store-gallery',			['as'=>'gallery.gallery.store',				'uses' => 'GalleryController@storeImage']);
	Route::get('gallery/{id}/gallery',					['as'=>'gallery.gallery',					'uses' => 'GalleryController@images']);
	Route::get('gallery/remove-gallery/{id}',			['as'=>'gallery.gallery.delete',			'uses' => 'GalleryController@deleteGalleryImage']);
	

	Route::get('news',									['as'=>'news',								'uses' => 'NewsController@index']);
	Route::get('news/create',							['as'=>'news.create',						'uses' => 'NewsController@create']);
	Route::post('news/store',							['as'=>'news.store',						'uses' => 'NewsController@store']);
	Route::get('news/edit/{id}',						['as'=>'news.edit',							'uses' => 'NewsController@edit']);
	Route::post('news/update/{id}',						['as'=>'news.update',						'uses' => 'NewsController@update']);
	Route::get('news/delete/{id}',						['as'=>'news.delete',						'uses' => 'NewsController@destroy']);
	Route::get('news/show/{id}',		    			['as'=>'news.show',							'uses' => 'NewsController@show']);
	Route::get('news/download/{id}',		    		['as'=>'news.download',						'uses' => 'NewsController@download']);
	
	Route::get('event',									['as'=>'event',								'uses' => 'EventController@index']);
	Route::get('event/create',							['as'=>'event.create',						'uses' => 'EventController@create']);
	Route::post('event/store',							['as'=>'event.store',						'uses' => 'EventController@store']);
	Route::get('event/edit/{id}',						['as'=>'event.edit',						'uses' => 'EventController@edit']);
	Route::post('event/update/{id}',					['as'=>'event.update',						'uses' => 'EventController@update']);
	Route::get('event/delete/{id}',						['as'=>'event.delete',						'uses' => 'EventController@destroy']);
	Route::get('event/show/{id}',		    			['as'=>'event.show',						'uses' => 'EventController@show']);

	Route::get('resource',								['as'=>'resource',							'uses' => 'ResourceController@index']);
	Route::get('resource/create',						['as'=>'resource.create',					'uses' => 'ResourceController@create']);
	Route::post('resource/store',						['as'=>'resource.store',					'uses' => 'ResourceController@store']);
	Route::get('resource/edit/{id}',					['as'=>'resource.edit',						'uses' => 'ResourceController@edit']);
	Route::post('resource/update/{id}',					['as'=>'resource.update',					'uses' => 'ResourceController@update']);
	Route::get('resource/delete/{id}',					['as'=>'resource.delete',					'uses' => 'ResourceController@destroy']);
	Route::get('resource/show/{id}',		    		['as'=>'resource.show',						'uses' => 'ResourceController@show']);
	Route::get('resource/download/{id}',		    	['as'=>'resource.download',					'uses' => 'ResourceController@download']);
	

	Route::get('setting',								['as'=>'setting',							'uses' => 'HomeController@showSettings']);
	Route::post('setting/update',						['as'=>'setting.update',					'uses' => 'HomeController@updateSettings']);
	


});

Route::fallback(function ()
{
    return response()->view('errors.undefined-route', [], 404);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
