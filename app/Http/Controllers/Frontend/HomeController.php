<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Repositories\About\AboutInterface;
use App\Repositories\Memberdetail\MemberdetailInterface;
use App\Repositories\Contact\ContactInterface;
use App\Repositories\Event\EventInterface;
use App\Repositories\Gallery\GalleryInterface;
use App\Repositories\Image\ImageInterface;
use App\Repositories\Link\LinkInterface;
use App\Repositories\Contributor\ContributorInterface;
use App\Repositories\Cause\CauseInterface;
use App\Repositories\History\HistoryInterface;
use App\Repositories\Join\JoinInterface;
use App\Repositories\Rotaract\RotaractInterface;
use App\Repositories\Rcc\RccInterface;
use App\Repositories\Interact\InteractInterface;
use App\Repositories\Opportunity\OpportunityInterface;
use App\Repositories\Memorandum\MemorandumInterface;
use App\Repositories\Meeting\MeetingInterface;
use App\Repositories\Campaign\CampaignInterface;
use App\Repositories\Member\MemberInterface;
use App\Repositories\Charter\CharterInterface;
use App\Repositories\Founder\FounderInterface;
use App\Repositories\Phf\PhfInterface;
use App\Repositories\Membership\MembershipTypeInterface;
use App\Repositories\News\NewsInterface;
use App\Repositories\Funding\FundingInterface;
use App\Repositories\FundingSource\FundingSourceInterface;


use App\Repositories\Resource\ResourceInterface;
use App\Repositories\Setting\SettingInterface;
use App\Repositories\Slider\SliderInterface;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(SliderInterface $slider, CharterInterface $charter, FounderInterface $founder, PhfInterface $phf, FundingSourceInterface $source, FundingInterface $funding, JoinInterface $join, RccInterface $rcc, RotaractInterface $rotaract, InteractInterface $interact, OpportunityInterface $opportunity, HistoryInterface $history, MemorandumInterface $memorandum, MemberdetailInterface $memberdetail,  MeetingInterface $meeting, ContributorInterface $contributor, CauseInterface $cause, CampaignInterface $campaign, AboutInterface $about, EventInterface $event, NewsInterface $news, GalleryInterface $gallery, ImageInterface $image, SettingInterface $setting, ResourceInterface $resource, MembershipTypeInterface $mtype, MemberInterface $member, LinkInterface $link)
    {
            $this->slider = $slider;
            $this->about = $about;
            $this->memberdetail = $memberdetail;
            $this->event = $event;
            $this->campaign = $campaign;
            $this->cause = $cause;
            $this->funding = $funding;
            $this->source = $source;
            $this->meeting = $meeting;
            $this->contributor = $contributor;
            $this->history = $history;
            $this->memorandum = $memorandum;
            $this->news = $news;
            $this->join = $join;
            $this->rotaract = $rotaract;
            $this->interact = $interact;
            $this->rcc = $rcc;
            $this->opportunity = $opportunity;
            $this->gallery = $gallery;
            $this->image = $image;
            $this->setting = $setting;
            $this->resource = $resource;
            $this->mtype = $mtype;
            $this->member = $member;
            $this->link = $link;
            $this->charter = $charter;
            $this->founder = $founder;
            $this->phf = $phf;
    } 


    public function index()
    {
        $data =[];
        $data['sliders'] = $this->slider->all();
        $data['about'] = $this->about->all()->first();
        $data['events'] = $this->event->all(5);
        $data['campaigns'] = $this->campaign->all();
        $data['causes']= $this->cause->all(3);
        $data['upcoming'] =$this->event->upcomingEvents(5);
        $data['news'] = $this->news->all(3);
        $data['members'] = $this->member->all();
        $data['lifetime_members'] = $this->mtype->findById(2)->members->all();
        $data['our_team'] = array_slice($data['lifetime_members'], 0, 4);
        $data['central_members'] = $this->mtype->findById(1)->members;
        $data['president'] = $data['members']->where('position','President')->first();
        $data['secretary'] = $data['members']->where('position','Secretary')->first();
        $data['treasurer'] = $data['members']->where('position','Treasurer')->first();
       
        
        return view(parent::commonData('frontend.home.index'),compact('data'));
    }

    public function about()
    {
        $data = [];
        $data['about'] = $this->about->all();
       
        return view(parent::commonData('frontend.home.about'),compact('data'));  

    }  
    public function president()
    {
        $data = [];
        $data['contributors'] = $this->contributor->all();
        return view(parent::commonData('frontend.home.contributors'),compact('data'));  

    }  
    public function contributorProfile($id)
    {
        $data= [];
        $data['profile'] = $this->contributor->findById($id);
        return view(parent::commonData('frontend.home.single_contributor'),compact('data'));  
    } 
    public function funding()
    {
        $data = [];
        $data['sources'] = $this->source->all();
        $data['campaigns'] = $this->campaign->all();
        return view(parent::commonData('frontend.home.funding'),compact('data'));  

    }  
    public function meeting()
    {
        $data = [];
        $data['meeting'] = $this->meeting->all()->first();
        return view(parent::commonData('frontend.home.meeting'),compact('data'));  

    }  
    public function join()
    {
        $data = [];
        $data['joins'] = $this->join->all();
        return view(parent::commonData('frontend.home.join'),compact('data'));  

    }  
    public function rotaract()
    {
        $data = [];
        $data['rotaract'] = $this->rotaract->all()->first();
        return view(parent::commonData('frontend.home.rotaract'),compact('data'));  

    }  
    public function interact()
    {
        $data = [];
        $data['interact'] = $this->interact->all()->first();
        return view(parent::commonData('frontend.home.interact'),compact('data'));  

    }  
    public function rcc()
    {
        $data = [];
        $data['rccs'] = $this->rcc->all();
        return view(parent::commonData('frontend.home.rcc'),compact('data'));  

    }  
    public function opportunity()
    {
        $data = [];
        $data['opportunities'] = $this->opportunity->all();
        return view(parent::commonData('frontend.home.opportunity'),compact('data'));  

    }  
    public function history()
    {
        $data = [];
        $data['histories'] = $this->history->all();
        return view(parent::commonData('frontend.home.history'),compact('data'));  

    }  
    public function memorandum()
    {
        $data = [];
        $data['memoranda'] = $this->memorandum->all();
        return view(parent::commonData('frontend.home.memorandum'),compact('data'));  

    }  
    public function cause()
    {
        $data = [];
        $data['causes'] = $this->cause->all();
        return view(parent::commonData('frontend.home.cause'),compact('data'));  
    }   
    public function causeSingle($id)
    {
        $data= [];
        $data['cause'] = $this->cause->findById($id);
        return view(parent::commonData('frontend.home.single_cause'),compact('data'));  
    } 
    public function campaign()
    {
        $data = [];
        $data['campaigns'] = $this->campaign->all();
        return view(parent::commonData('frontend.home.campaign'),compact('data'));  
    }  
    public function campaignSingle($id)
    {
        $data= [];
        $data['campaign'] = $this->campaign->findById($id);
        return view(parent::commonData('frontend.home.single_campaign'),compact('data'));  
    } 
    public function members()
    {
        $data= [];
        $data['members'] = $this->member->all();
        $data['memberdetail'] = $this->memberdetail->all()->first();
        $data['membership_type'] = $this->mtype->all();
        $data['central_members'] = $this->mtype->findById(1)->members;
        $data['lifetime_members'] = $this->mtype->findById(2)->members;
        $data['others'] = $this->mtype->findById(3)->members;
       
         $data['president'] = $data['members']->where('position','President')->first();

        $data['secretary_general'] = $data['members']->where('position','General Secretary')->first();
        $data['ceo'] = $data['members']->where('position','Chief Executive Officer')->first();
       


        return view(parent::commonData('frontend.home.members'),compact('data'));  
    } 

    public function charter()
    {
        $data= [];
        $data['charter'] = $this->charter->all()->first();
        return view(parent::commonData('frontend.home.charter'),compact('data'));  
    } 
    public function founder()
    {
        $data= [];
        $data['founder'] = $this->founder->all()->first();
        return view(parent::commonData('frontend.home.founder'),compact('data'));  
    } 
    public function phf()
    {
        $data= [];
        $data['phf'] = $this->phf->all()->first();
        return view(parent::commonData('frontend.home.phf'),compact('data'));  
    } 

    public function committee()
    {
        $data= [];
        $data['members'] = $this->member->all();
        $data['membership_type'] = $this->mtype->all();
        $data['administration-committee-member'] = $this->mtype->findById(3)->members;
        $data['administration-committee-director'] = $this->mtype->findById(4)->members->first();
        $data['service-project-committee-member'] = $this->mtype->findById(5)->members;
        $data['service-project-committee-director'] = $this->mtype->findById(6)->members->first();
        $data['youth-service-sub-committee-member'] = $this->mtype->findById(15)->members;
        $data['youth-service-sub-committee-director'] = $this->mtype->findById(16)->members->first();
        $data['vocational-service-sub-committee-member'] = $this->mtype->findById(17)->members;
        $data['vocational-service-sub-committee-director'] = $this->mtype->findById(18)->members->first();
        $data['flagship-project-sub-committee-member'] = $this->mtype->findById(13)->members;
        $data['flagship-project-sub-committee-director'] = $this->mtype->findById(14)->members->first();
        $data['membership-committee-member'] = $this->mtype->findById(7)->members;
        $data['membership-committee-director'] = $this->mtype->findById(8)->members->first();
        $data['public-image-committee-member'] = $this->mtype->findById(9)->members;
        $data['public-image-committee-director'] = $this->mtype->findById(10)->members->first();
        $data['rotary-foundation-committee-member'] = $this->mtype->findById(11)->members;
        $data['rotary-foundation-committee-director'] = $this->mtype->findById(12)->members->first();
       
       
       


        return view(parent::commonData('frontend.home.committee'),compact('data'));  
    } 
    public function memberProfile($id)
    {
        $data= [];
        $data['profile'] = $this->member->findById($id);
        return view(parent::commonData('frontend.home.single_member'),compact('data'));  
    } 
    public function boardmembers()
    {
        $data= [];
        $data['boardmembers'] = $this->member->all();
        $data['membership_type'] = $this->mtype->all();
        $data['lifetime_members'] = $this->mtype->findById(2)->members;

        return view(parent::commonData('frontend.home.boardmembers'),compact('data'));  
    }

    public function events()
    {
        $data['events'] = $this->event->paginate(2);
        $data['upcoming'] =$this->event->upcomingEventsPagination(2);
        $data['news'] = $this->news->paginate(4);
        return view(parent::commonData('frontend.home.events'),compact('data'));  
    }  

    public function upcomingEvents()
    {
        
        $data['upcoming'] =$this->event->upcomingEventsPagination(2);
        $data['news'] = $this->news->paginate(4);
        return view(parent::commonData('frontend.home.upcoming-events'),compact('data'));        
    } 

    public function news()
    {
        $data['press'] = $this->news->all();
        $data['news'] = $data['press']->where('ncategory_id','2');


        return view(parent::commonData('frontend.home.news'),compact('data'));  
    } 
    public function notice()
    {
        $data['press'] = $this->news->all();
        $data['news'] = $data['press']->where('ncategory_id','1');


        return view(parent::commonData('frontend.home.notice'),compact('data'));  
    } 
    public function bulletin()
    {
        $data['press'] = $this->news->all();
        $data['bulletins'] = $data['press']->where('ncategory_id','3');


        return view(parent::commonData('frontend.home.bulletin'),compact('data'));  
    } 

    public function contact()
    {
        $data = [];
        $data['setting'] = $this->setting->getSettings();
        return view(parent::commonData('frontend.home.contact'),compact('data'));  
    } 

    public function gallery()
    {
        $data = [];
        $data['gallery'] = $this->gallery->all();
        return view(parent::commonData('frontend.home.gallery'),compact('data'));  
    } 
    public function gallerySingle($id)
    {
        $data = [];
        $data['gallery'] = $this->gallery->findById($id);
        $data['image']= $this->image->all();
        $data['gallery_images'] = $data['image']->where('gallery_id',$id);
        return view(parent::commonData('frontend.home.single_gallery'),compact('data'));  
    } 

    public function privacyPolicy()
    {
        $data = [];
        $data['setting'] = $this->setting->getSettings();
        return view(parent::commonData('frontend.home.privacy-policy'),compact('data'));  
    }    

    public function resources()
    {
        $data=[];
        $data['resources'] = $this->resource->non_confidential();
        $data['confidential_resources'] = $this->resource->confidential();
        $data['links'] = $this->link->all();
        return view(parent::commonData('frontend.home.resources'),compact('data'));  
    } 

    public function singleEvent($slug)
    {
            $data = [];

            $data['event'] = $this->event->findBySlug($slug);

            $data['other_events'] = $this->event->otherEvents($data['event']->id,4);

            $data['news'] = $this->news->all()->where('ncategory_id','2');
            
            return view(parent::commonData('frontend.home.single-event'),compact('data'));  

    } 

    public function singleNews($slug)
    {
            $data = [];

            $data['news'] = $this->news->findBySlug($slug);

            $data['other_news']= $this->news->otherNews($data['news']->id,4)->where('ncategory_id','2');

            $data['events'] = $this->event->paginate(4);

            return view(parent::commonData('frontend.home.single-news'),compact('data'));  


     } 
     public function singleNotice($slug)
     {
             $data = [];
 
             $data['news'] = $this->news->findBySlug($slug);
 
             $data['other_news']= $this->news->otherNews($data['news']->id,4)->where('ncategory_id','1');
 
             $data['events'] = $this->event->paginate(4);
 
             return view(parent::commonData('frontend.home.single-notice'),compact('data'));  
 
 
      } 
     
     public function organizedPathway()
     {
             return view(parent::commonData('frontend.home.organized'));
     }

     public function professionalDevelopment()
     {
             return view(parent::commonData('frontend.home.professional'));
     }

     public function informationCenter()
     {
             return view(parent::commonData('frontend.home.information'));
     }

     public function aidEconomic()
     {
             return view(parent::commonData('frontend.home.economic-aid'));
     } 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
