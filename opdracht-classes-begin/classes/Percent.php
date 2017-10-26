<?php
    class Percent {
        
        public $relative;
        public $hundred;
        public $nominal;
        
        public function __construct($new, $unit) {
            $this->relative = $new / $unit;
            $this->hundred = $this->relative * 100;
            
            if ($this->relative > 1) {
				$this->nominal = "positive";
            }
            elseif ($this->relative == 1) {
				$this->nominal = "status-quo";
            }
            else {
				$this->nominal = "negative";
			}
            
            $this->relative = $this->formatNumber($this->relative);
            $this->hundred = $this->formatNumber($this->hundred);
            
        }
        
        public function formatNumber($number) {
            $number = number_format($number);
            return $number;
        }
        
    }
?>