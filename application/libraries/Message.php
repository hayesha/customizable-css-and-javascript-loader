<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Title           Message library class
 *
 * @package        LMJ-futureid
 * Location        application/frontend/libraries/activity
 *
 * @author         Hayesha - <<hayeshais[at]gmail[dot]com>>
 * @copyright      Cyber L-M-J
 *
 * created on      19-08-2011, 10:30AM by Hayesha
 * updated on      dd-mm-yyy, hh:mm by {name}
 *
 * Description     This file have functions to pass messages like information, confirmation, warning & error
 *
 * */

class Message
{

    /**
     * CodeIgniter global
     *
     * @var string
     **/
    protected $ci;


    /**
     * message footer
     *
     * @var string
     **/

    private $header;


    /**
     * message footer
     *
     * @var string
     **/
    private $footer;


    /**
     * messages
     *
     * @var string
     **/
    protected $message;


    /**
     * __construct
     *
     * @param none
     * @access public
     * @return void
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    public function __construct()
    {
        $this->ci =& get_instance();
    }



    /**
     *
     * Set the message footer
     *
     * @param none
     * @access private
     * @return string $this->footer
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    private function set_footer()
    {
        $this->footer = '</ul></div>';
    }




    /**
     *
     * Get the message footer
     *
     * @param none
     * @access private
     * @return string $this->message_footer
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    private function get_footer()
    {
        return $this->footer = '</div>';
    }



    /**
     *
     * Set the information message header
     *
     * @param none
     * @access private
     * @return string $header
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    private function get_information_header()
    {
        $this->header = '<div class="information message">';
        $this->header .= '<p><em>Information</em></p><ul>';

        return $this->header;
    }



    /**
     *
     * Set the information message
     *
     * @param string array
     * @access public
     * @return void
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    public function set_information($msg = array())
    {
        $this->message .= $this->get_information_header();
        if(is_array($msg) && count($msg) > 0) {
            foreach($msg as $ms)
            {
                if(trim($ms)!="") 
            	 {
            	 	$this->message .= '<li>'.strip_tags($ms).'</li>';
            	 }
            }
        }
        
        $foot = '';
        $foot .= '</ul></div>'; 
        //$foot .= $this->get_footer();
        $this->message .= $foot;
    }





    /**
     *
     * Set the confirmation message header
     *
     * @param none
     * @access private
     * @return string $header
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    private function get_confirmation_header()
    {
        $this->header = '<div class="confirmation message">';
        $this->header .= '<p><em>Success</em></p><ul>';

        return $this->header;
    }



    /**
     *
     * Set the confirmation message
     *
     * @param string array
     * @access public
     * @return void
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    public function set_confirmation($msg = array())
    {
        $this->message .= $this->get_confirmation_header();
        if(is_array($msg) && count($msg) > 0) {
            foreach($msg as $ms)
            {
                if(trim($ms)!="") 
            	 {
            	 	$this->message .= '<li>'.strip_tags($ms).'</li>';
            	 }
            }
        }
        $foot = '';
        $foot .= '</ul></div>';
        //$foot .= $this->get_footer();
        $this->message .= $foot;
    }





    /**
     *
     * Set the warning message header
     *
     * @param none
     * @access private
     * @return string $header
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    private function get_warning_header()
    {
        $this->header = '<div class="warning message">';
        $this->header .= '<p><em>Warning</em></p><ul>';

        return $this->header;
    }



    /**
     *
     * Set the warning message
     *
     * @param string array
     * @access public
     * @return void
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    public function set_warning($msg = array())
    {
        $this->message .= $this->get_warning_header();
        if(is_array($msg) && count($msg) > 0) {
            foreach($msg as $ms)
            {
                if(trim($ms)!="") 
            	 {
            	 	$this->message .= '<li>'.strip_tags($ms).'</li>';
            	 }
            }
        }
        $foot = '';
        $foot .= '</ul></div>';
        //$foot .= $this->get_footer();
        $this->message .= $foot;
    }




    /**
     *
     * Set the error message header
     *
     * @param none
     * @access private
     * @return string $header
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    private function get_error_header()
    {
        $this->header = '<div class="errors message">';
        $this->header .= '<p><em>Oops... the following errors were encountered:</em></p><ul>';

        return $this->header;
    }



    /**
     *
     * Set the error message
     *
     * @param string array
     * @access public
     * @return void
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    public function set_error($msg = array())
    {
        $this->message .= $this->get_error_header();
        if(is_array($msg) && count($msg) > 0) {
            foreach($msg as $ms)
            {
            	 if(trim($ms)!="") 
            	 {
            	 	$this->message .= '<li>'.strip_tags($ms).'</li>';
            	 }
            }
        }
        $foot = '';
        $foot .= '</ul></div>';
        //$foot .= $this->get_footer();
        $this->message .= $foot;
    }



    /**
     *
     * Get the message
     *
     * @param none
     * @access public
     * @return string $this->message
     * @author Hayesha - hayesha.somarathne@cyberlmj.com
     **/
    public function get_message()
    {
        return $this->message;
    }


}

/* End of file Message.php */
/* Location: ./application/frontend/libraries/activity/Message.php */
