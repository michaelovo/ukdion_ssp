<?php

namespace App\Listeners;

use App\Models\Photo;
use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Events\ImageUploadEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ImageUploadListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ImageUploadEvent $event)
    {
       
        if ($this->request->hasfile('image')) {
            $images = $this->request->file('image');

            foreach($images as $image) {
                $image_url = cloudinary()->upload($image->getRealPath(),['folder'=>'ukdion'],)->getSecurePath();
                $photo = Photo::create([
                    'campaign_id' => $event->campaign->id,
                    'image_url' => $image_url,
                  ]);
            }
         }
    }
}
