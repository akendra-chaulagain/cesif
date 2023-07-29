<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class PhotoController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');

            // Upload the photo to Cloudinary
            $uploadedPhoto = Cloudinary::upload($photo->getRealPath());

            // Get the public ID of the uploaded photo from Cloudinary
            $publicId = $uploadedPhoto->getPublicId();

            // You can also access the URL of the uploaded photo with:
            // $url = $uploadedPhoto->secure_url;

            // Save the public ID to your database or do further processing as needed

            return back()->with('success', 'Photo uploaded successfully!');
        }

        return back()->with('error', 'Something went wrong with the upload!');
    }
}
