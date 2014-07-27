package com.AngelHackDemoApp.ViewListener;

import android.content.Intent;
import android.provider.MediaStore;
import android.view.View;

import com.AngelHackDemoApp.Utitlities.Functions;

public class OnClickListener extends Functions{

	
	public void homeRegisterCLick(View view){
		AnimateFlipper(vfMainHolder, 1, false);
	}
	public void registerRegClick(View view){
		ivHeaderMenu.setVisibility(View.VISIBLE);
		AnimateFlipper(vfSubMainHolder, 1, false);
	}
	public void menuClick(View view){
		if(vfdrawer.getDisplayedChild() == 0)
			AnimateFlipper(vfdrawer, 1,	false);
		else
			AnimateFlipper(vfdrawer, 0, true);
	}
	public void takephotoClick(View view){
		 Intent takePictureIntent = new Intent(MediaStore.ACTION_IMAGE_CAPTURE);
		 if (takePictureIntent.resolveActivity(getPackageManager()) != null) {
		     startActivityForResult(takePictureIntent, REQUEST_PHOTO_CAPTURE);
		 }
	}
	public void takevideoClick(View view){
		 Intent takeVideoIntent = new Intent(MediaStore.ACTION_VIDEO_CAPTURE);
		 if (takeVideoIntent.resolveActivity(getPackageManager()) != null) {
		     startActivityForResult(takeVideoIntent, REQUEST_VIDEO_CAPTURE);
		 }
	}
}
