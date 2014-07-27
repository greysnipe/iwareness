package com.AngelHackDemoApp.Utitlities;

import com.AngelHackDemoApp.R;

import android.view.View;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.ViewFlipper;

public class Functions extends Variables{

	public void initializeObjects(){
		 vfMainHolder = (ViewFlipper)findViewById(R.id.vfMainHolder);

		 vfMainHolder.addView(View.inflate(this, R.layout.activity_home, 					null), 0);
		 vfMainHolder.addView(View.inflate(this, R.layout.activity_submainholder, 				null), 1);
		 
		 vfSubMainHolder = (ViewFlipper)findViewById(R.id.vfSubMainHolder);
		 vfdrawer = (ViewFlipper)findViewById(R.id.vfdrawer);
		 
		  tvHeaderTItle = (TextView)findViewById(R.id.tvHeaderTItle);
		  ivHeaderMenu = (ImageButton)findViewById(R.id.ivHeaderMenu);
		  ivHeaderMenu.setVisibility(View.GONE);
		  

		 vfdrawer.addView(View.inflate(this, R.layout.drawer_null, 					null), 0);
		 vfdrawer.addView(View.inflate(this, R.layout.drawer_profile, 				null), 1);
			 
		 vfSubMainHolder.addView(View.inflate(this, R.layout.activity_register, 				null), 0);
		 vfSubMainHolder.addView(View.inflate(this, R.layout.activity_main, 					null), 1);

		 vfMain = (ViewFlipper)findViewById(R.id.vfMain);
		 vfMain.addView(View.inflate(this, R.layout.activity_capture, 				null), 0);
		 vfMain.setDisplayedChild(0);
		 
		 vfdrawer.setDisplayedChild(0);
		 vfSubMainHolder.setDisplayedChild(0);
		
		 vfMainHolder.setDisplayedChild(0);
	}
	
	
	public  void AnimateFlipper(ViewFlipper viewflipper, int mode, boolean BackPressed) {
		if(BackPressed == false){
			viewflipper.setInAnimation(this, R.anim.in_from_left);
			viewflipper.setOutAnimation(this, R.anim.out_to_right);
		}
		else{
			viewflipper.setInAnimation(this, R.anim.in_from_right);
			viewflipper.setOutAnimation(this, R.anim.out_to_left);
		}
		viewflipper.setDisplayedChild(mode);
}

}
