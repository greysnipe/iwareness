package com.AngelHackDemoApp;

import com.AngelHackDemoApp.ViewListener.OnClickListener;

import android.content.Intent;
import android.graphics.Bitmap;
import android.net.Uri;
import android.os.Bundle;
import android.util.Log;

public class MainActivity extends OnClickListener {

	  
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_mainholder);
		
		initializeObjects();
		
	}

	@Override
	public void onBackPressed() {
		// TODO Auto-generated method stub
		switch(vfMainHolder.getDisplayedChild()){
			case 0:
				finish();
			break;
			case 1:
				switch(vfSubMainHolder.getDisplayedChild()){
				case 0:
					AnimateFlipper(vfMainHolder, 0, true);
				break;
				case 1:
					finish();
				break;
			}
			break;
		}
	}
	

	@Override
	protected void onActivityResult(int requestCode, int resultCode, Intent data) {
	    if (requestCode == REQUEST_VIDEO_CAPTURE && resultCode == RESULT_OK) {
	        Uri videoUri = data.getData();
	        
	        Log.e("fucking shit", videoUri + "");
	   //     mVideoView.setVideoURI(videoUri);
	    }
	    
	    else if (requestCode == REQUEST_PHOTO_CAPTURE && resultCode == RESULT_OK) {
	    	Bundle extras = data.getExtras();
	        Bitmap imageBitmap = (Bitmap) extras.get("data");
	     
	        
	        Log.e("fucking shit camera", imageBitmap + "");
	   //     mVideoView.setVideoURI(videoUri);
	    }
	    
	    
	}

	
}
