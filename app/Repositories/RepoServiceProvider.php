<?php

namespace App\Repositories;


use App\Repositories\About\AboutInterface;
use App\Repositories\About\AboutRepository;
use App\Repositories\Memberdetail\MemberdetailInterface;
use App\Repositories\Memberdetail\MemberdetailRepository;
use App\Repositories\Contact\ContactInterface;
use App\Repositories\Contact\ContactRepository;
use App\Repositories\Charter\CharterInterface;
use App\Repositories\Charter\CharterRepository;
use App\Repositories\Founder\FounderInterface;
use App\Repositories\Founder\FounderRepository;
use App\Repositories\Phf\PhfInterface;
use App\Repositories\Phf\PhfRepository;
use App\Repositories\Contributor\ContributorInterface;
use App\Repositories\Contributor\ContributorRepository;
use App\Repositories\Meeting\MeetingInterface;
use App\Repositories\Meeting\MeetingRepository;
use App\Repositories\History\HistoryInterface;
use App\Repositories\History\HistoryRepository;
use App\Repositories\FundingSource\FundingSourceInterface;
use App\Repositories\FundingSource\FundingSourceRepository;
use App\Repositories\Funding\FundingInterface;
use App\Repositories\Funding\FundingRepository;
use App\Repositories\Opportunity\OpportunityInterface;
use App\Repositories\Opportunity\OpportunityRepository;
use App\Repositories\Cause\CauseInterface;
use App\Repositories\Cause\CauseRepository;
use App\Repositories\Rotaract\RotaractInterface;
use App\Repositories\Rotaract\RotaractRepository;
use App\Repositories\Interact\InteractInterface;
use App\Repositories\Interact\InteractRepository;
use App\Repositories\Rcc\RccInterface;
use App\Repositories\Rcc\RccRepository;
use App\Repositories\Join\JoinInterface;
use App\Repositories\Join\JoinRepository;
use App\Repositories\Campaign\CampaignInterface;
use App\Repositories\Campaign\CampaignRepository;
use App\Repositories\Memorandum\MemorandumInterface;
use App\Repositories\Memorandum\MemorandumRepository;
use App\Repositories\Event\EventInterface;
use App\Repositories\Event\EventRepository;
use App\Repositories\Gallery\GalleryInterface;
use App\Repositories\Gallery\GalleryRepository;
use App\Repositories\Image\ImageInterface;
use App\Repositories\Image\ImageRepository;
use App\Repositories\Link\LinkInterface;
use App\Repositories\Link\LinkRepository;
use App\Repositories\Member\MemberInterface;
use App\Repositories\Member\MemberRepository;
use App\Repositories\Membership\MembershipTypeInterface;
use App\Repositories\Membership\MembershipTypeRepository;
use App\Repositories\NewsCategory\NewsCategoryInterface;
use App\Repositories\NewsCategory\NewsCategoryRepository;
use App\Repositories\News\NewsInterface;
use App\Repositories\News\NewsRepository;
use App\Repositories\Resource\ResourceInterface;
use App\Repositories\Resource\ResourceRepository;
use App\Repositories\Setting\SettingInterface;
use App\Repositories\Setting\SettingRepository;
use App\Repositories\Slider\SliderInterface;
use App\Repositories\Slider\SliderRepository;
use Illuminate\Support\ServiceProvider;

class RepoServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       $this->app->bind(SliderInterface::class, SliderRepository::class);
       $this->app->bind(AboutInterface::class, AboutRepository::class);
       $this->app->bind(MemberdetailInterface::class, MemberdetailRepository::class);
       $this->app->bind(FundingSourceInterface::class, FundingSourceRepository::class);
       $this->app->bind(FundingInterface::class, FundingRepository::class);
       $this->app->bind(MemberInterface::class, MemberRepository::class);
       $this->app->bind(MembershipTypeInterface::class, MembershipTypeRepository::class);
       $this->app->bind(ContactInterface::class, ContactRepository::class);
       $this->app->bind(FounderInterface::class, FounderRepository::class);
       $this->app->bind(CharterInterface::class, CharterRepository::class);
       $this->app->bind(PhfInterface::class, PhfRepository::class);
       $this->app->bind(ContributorInterface::class, ContributorRepository::class);
       $this->app->bind(MeetingInterface::class, MeetingRepository::class);
       $this->app->bind(HistoryInterface::class, HistoryRepository::class);
       $this->app->bind(OpportunityInterface::class, OpportunityRepository::class);
       $this->app->bind(CauseInterface::class, CauseRepository::class);
       $this->app->bind(RotaractInterface::class, RotaractRepository::class);
       $this->app->bind(InteractInterface::class, InteractRepository::class);
       $this->app->bind(RccInterface::class, RccRepository::class);
       $this->app->bind(JoinInterface::class, JoinRepository::class);
       $this->app->bind(CampaignInterface::class, CampaignRepository::class);
       $this->app->bind(MemorandumInterface::class, MemorandumRepository::class);
       $this->app->bind(GalleryInterface::class, GalleryRepository::class);
       $this->app->bind(ImageInterface::class, ImageRepository::class);
       $this->app->bind(NewsInterface::class, NewsRepository::class);
       $this->app->bind(NewsCategoryInterface::class, NewsCategoryRepository::class);
       $this->app->bind(EventInterface::class, EventRepository::class);
       $this->app->bind(ResourceInterface::class, ResourceRepository::class);
       $this->app->bind(SettingInterface::class, SettingRepository::class);
       $this->app->bind(LinkInterface::class, LinkRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        

    }
}
