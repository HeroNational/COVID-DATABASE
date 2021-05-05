<?php 

    class Browser{
        private $language;
        private $version;
        private $unformated;
        
        public function __construct()
        {
            

            // Define all available languages.
            // WARNING: uncomment all available languages

            $this->setAcceptLanguages(
                array(

                    'fr', // french.
                    'en', // engAcceptlish.
/* 
                    'af', // afrikaans.
                    'ar', // arabic.
                    'bg', // bulgarian.
                    'ca', // catalan.
                    'cs', // czech.
                    'da', // danish.
                    'de', // german.
                    'el', // greek.
                    'es', // spanish.
                    'et', // estonian.
                    'fi', // finnish.
                    'gl', // galician.
                    'he', // hebrew.
                    'hi', // hindi.
                    'hr', // croatian.
                    'hu', // hungarian.
                    'id', // indonesian.
                    'it', // italian.
                    'ja', // japanese.
                    'ko', // korean.
                    'ka', // georgian.
                    'lt', // lithuanian.
                    'lv', // latvian.
                    'ms', // malay.
                    'nl', // dutch.
                    'no', // norwegian.
                    'pl', // polish.
                    'pt', // portuguese.
                    'ro', // romanian.
                    'ru', // russian.
                    'sk', // slovak.
                    'sl', // slovenian.
                    'sq', // albanian.
                    'sr', // serbian.
                    'sv', // swedish.
                    'th', // thai.
                    'tr', // turkish.
                    'uk', // ukrainian.
                    'zh' // chinese.
*/
                )
            );

        }
    
        public function setAcceptLanguages($a){
            $this->languages=$a;
        }

        public function getAcceptLanguages(){
            return $this->languages;
        }

        //Get the Browser Language
        public function getLanguage(){
            return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        }



    }

?>