<?php

use Illuminate\Database\Seeder;
use App\Models\ContactUs;

class ContactUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = ContactUs::create([
            'meta_title' => 'BeMo Project | Contact Us',
            'meta_description' => 'FREE Ultimate Guide to CDA Interviews: Tips & Proven Strategies to Help You Prepare & Ace Your CDA Structured Interview.',
            'contact' => '<p><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 17px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(55, 55, 55); font-family: arial; letter-spacing: 2px; font-weight: bold;">BeMo Academic Consulting Inc.</span><br style="color: rgb(55, 55, 55); font-family: arial; font-size: 22px; letter-spacing: 2px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 22px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(55, 55, 55); font-family: arial; letter-spacing: 2px;"><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background: transparent; font-weight: bold;"><u>Toll Free</u></span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background: transparent;">:&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; background: transparent;">1-855-900-BeMo (2366)</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background: transparent;"><br></span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background: transparent; font-weight: bold;"><u>Email</u></span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; background: transparent;">:&nbsp;</span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 14px; background: transparent;">info@bemoacademicconsulting.com</span></span><br></p>',
            'name_title' => 'NAME',
            'email_title' => 'EMAIL',
            'message_title' => 'HOW CAN WE HELP YOU?',
            'button_left' => 'RESET',
            'button_right' => 'SUBMIT',
            'note' => '<span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(55, 55, 55); font-family: arial; text-align: center; font-weight: bold;"><u>Note</u></span><span style="margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 15px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(55, 55, 55); font-family: arial; text-align: center;">: If you are having difficulties with our contact us form above, send us an email to&nbsp;info@bemoacademicconsulting.com&nbsp;(copy &amp; paste the email address)</span>',
            'image_name' => '/storage/contact-us.jpeg'
        ]);
    }
}
