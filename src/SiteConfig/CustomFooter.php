<?php

namespace Inferno\InfernoConfig\SiteConfig;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\FieldType\DBHTMLText;
use TractorCow\Colorpicker\Forms\ColorField;

class CustomFooter extends DataExtension {

	private static $db = [
        'FooterContent' => 'HTMLText',
		'FooterSubContent' => 'HTMLText',
		'FooterWidth' =>'Varchar',
		'FooterSub' =>'Varchar',
		//Social Options
		'SocialOptions' => 'Varchar',
		'SocialColor' => 'Color',
		'SocialSize' => 'Varchar',

		'FacebookLink' => 'Varchar',
		'TwitterLink' => 'Varchar',
		'GoogleLink' => 'Varchar',
		'LinkedLink' => 'Varchar',
		'InstagramLink' => 'Varchar',
		'PinterestLink' => 'Varchar',
		'RSSLink' => 'Varchar',
		'YoutubeLink' => 'Varchar',
		'TripadviserLink' => 'Varchar',

		'Facebook' => 'Boolean',
		'Twitter' => 'Boolean',
		'Google' => 'Boolean',
		'Linked' => 'Boolean',
		'Instagram' => 'Boolean',
		'Pinterest' => 'Boolean',
		'RSS' => 'Boolean',
		'Youtube' => 'Boolean',
		'Tripadviser' => 'Boolean',
		//Contact options
		'ContactOptions' => 'Varchar',
		'ContactName' => 'Varchar',
		'ContactPhone' => 'Varchar',
		'ContactEmail' => 'Varchar',
		'ContactAddress' => 'Varchar',
		'ContactMapList' => 'Varchar',
		'ContactMap' => 'Text',
		//Payment options
		'PaymentOptions' => 'Varchar',
		'PaymentSize' => 'Varchar',
		'Bitcoin' => 'Boolean',
		'Mobicred' => 'Boolean',
		'Payfast' => 'Boolean',
		'BitcoinPayment' => 'Varchar',
		'MobicredPayment' => 'Varchar',
		'PayfastPayment' => 'Varchar',
		'ContentOption' => 'Varchar',

		//Colors
		'HeaderColor' => 'Color',
		'TextColor' => 'Color',
		'LinkColor' => 'Color',
		'LinkHoverColor' => 'Color',
		'BackgroundColor' => 'Color',

    ];

    private static $has_one = [
	"Logo"=>File::class,
	"SecondLogo" => Image::class
	];

	public function getCMSFields() {
   	$this->extend('updateCMSFields', $fields);

 	return $fields;
	}



	public function updateCMSFields(FieldList $fields) {

	$fields->addFieldToTab('Root.Main', new UploadField('Logo','Company Logo'));
	$fields->addFieldToTab('Root.Main', new UploadField('SecondLogo','Mobile Logo'));
	$fields->addFieldToTab('Root.Footer', new HTMLEditorField('FooterContent','Footer Content'));
	$fields->addFieldToTab('Root.Footer', new HTMLEditorField('FooterSubContent','Footer Sub Content'));
		//List options
			$ContainerList = array("container-fluid" => "Container Fluid", "container" => "Container");
			$ContentList = array("0" => "None / Alone", "1" => "Left", "2" => "Center", "3" => "Right");
		$SubList = array("0" => "None ", "1" => " Show");
			$SocialPositionList = array("0" => "None", "1" => "Left", "2" => "Center" , "3" => "Right");
			$SocialSizeList = array("40px" => "40px", "36px" => "36px", "32px" => "32px" , "28px" => "28px");
		$fields->addFieldsToTab("Root.Footer", array(
		DropdownField::create("FooterWidth","Container Size", $ContainerList),
		DropdownField::create("ContentOption","Display Content", $ContentList),
		DropdownField::create("FooterSub","Display sub footer", $SubList),
			LiteralField::create("","Social options"),
		DropdownField::create("SocialOptions","Social Icons / Position",$SocialPositionList),
		ColorField::create("SocialColor","Social Icon colors")->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Facebook","Facebook Link")->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Twitter","Twitter Link")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Google","Google Link")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Linked","Linked Link")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Instagram","Instagram Link")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Pinterest","Pinterest Link")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("RSS","RSS Link")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Youtube","Youtube Link")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Tripadviser","Tripadviser Link")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("SocialOptions")->isEqualTo(0)->end(),

		DropdownField::create("SocialSize","Social Icon Size", $SocialSizeList)->hideIf("SocialOptions")->isEqualTo(0)->end(),
		TextField::create("FacebookLink","Facebook Link")->displayIf("Facebook")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),


		TextField::create("TwitterLink","Twitter Link")->displayIf("Twitter")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),
		TextField::create("GoogleLink","Google+ Link")->displayIf("Google")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),
		TextField::create("LinkedLink","LinkedIn Link")->displayIf("Linked")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),
		TextField::create("InstagramLink","Instagram Link")->displayIf("Instagram")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),
		TextField::create("PinterestLink","Pinterest Link")->displayIf("Pinterest")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),
		TextField::create("RSSLink","RSS Link")->displayIf("RSS")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),
		TextField::create("YoutubeLink","Youtube Link")->displayIf("Youtube")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),
		TextField::create("TripadviserLink","Tripadviser Link")->displayIf("Tripadviser")->isChecked()
			->andIf("SocialOptions")->isNotEqualTo(0)->end(),
		),'FooterContent');



	//Payment Options
		$PaymentOptionsList = array("0" => "None", "1" => "Left", "2" => "Center", "3" => "Right");
		$PaymentSizeList = array("110px" => "Small", "150px" => "Small-medium", "200px" => "Medium", "300px" => "Larger");
	$fields->addFieldsToTab("Root.Footer", array(
		//Checkboxes
		LiteralField::create("","Payments"),
		DropdownField::create("PaymentOptions","Payment Options", $PaymentOptionsList),
		CheckboxField::create("Bitcoin","Bitcoin Payment")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("PaymentOptions")->isEqualTo(0)->end(),
		DropdownField::create("PaymentSize","Payment Size", $PaymentSizeList)->hideIf("PaymentOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Bitcoin","Bitcoin Payment")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("PaymentOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Mobicred","Mobicred Payment")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("PaymentOptions")->isEqualTo(0)->end(),
		CheckboxField::create("Payfast","Payfast Payment")->addExtraClass('displayinline')->addExtraClass('displayinline')->hideIf("PaymentOptions")->isEqualTo(0)->end(),
		//Textfields
		TextField::create("BitcoinPayment","Bitcoin Payment")->displayIf("Bitcoin")->isChecked()
		->andIf("PaymentOptions")->isNotEqualTo(0)->end(),
		TextField::create("MobicredPayment","Mobicred Payment")->displayIf("Mobicred")->isChecked()
		->andIf("PaymentOptions")->isNotEqualTo(0)->end(),
		TextField::create("PayfastPayment","Payfast Payment")->displayIf("Payfast")->isChecked()
		->andIf("PaymentOptions")->isNotEqualTo(0)->end(),
		),'FooterContent');




	//Contact Details Option
	$ContactPositionList = array("0" => "None", "1" => "Left", "2" => "Center", "3"=> "Right");
		$ContactMapListOptions = array("0" => "None", "1" => "Left", "2" => "Center", "3"=> "Right");
		$fields->addFieldsToTab("Root.Footer", array(
			LiteralField::create("","Contact Information"),
			 DropdownField::create('ContactOptions', 'Contact Options', $ContactPositionList),
            TextField::create('ContactName', 'Name')->hideIf("ContactOptions")->isEqualTo(0)->end(),
			TextField::create('ContactPhone', 'Phone Number')->hideIf("ContactOptions")->isEqualTo(0)->end(),
			TextField::create('ContactAddress', 'Address')->hideIf("ContactOptions")->isEqualTo(0)->end(),
			TextField::create('ContactEmail', 'Email')->hideIf("ContactOptions")->isEqualTo(0)->end(),
			DropdownField::create('ContactMapList', 'Map Display',$ContactMapListOptions)->hideIf("ContactOptions")->isEqualTo(0)->end(),

			TextField::create('ContactMap', 'Map')->displayIf("ContactOptions")->isEqualTo(1)
			->andIf("ContactMapList")->isEqualTo(1)->end()
        ),'FooterContent');


		$fields->addFieldsToTab("Root.Footer", array(
			ColorField::create("BackgroundColor","BackgroundColor"),
			ColorField::create("HeaderColor","Headers color"),
			ColorField::create("TextColor","Text Color"),
			ColorField::create("LinkColor","Link Color"),
			ColorField::create("LinkHoverColor","Link hover color")
        ),'FooterContent');
	}
}

