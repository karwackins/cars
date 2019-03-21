<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

                  <!--
                    
                  -->
                    
                    
                        public function car() {
        return $this->belongsTo('Cars', 'cars_id');
    }
    
        public function shopping() {
       return $this->hasMany(Shopping::class);
       //return $this->hasMany('Shopping');
    }