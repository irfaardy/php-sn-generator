<?php 
	$config =  [ 
            	/*
                |--------------------------------------------------------------------------
                | Serial Config
                |--------------------------------------------------------------------------
                |
                | length    : length for one segment
                | segment   : segment amount for Serial number 
                | seperator : striped segment for serial (set null if you do not wish to use seperator)
                |
                */
            		'length'			=> 4, //default : 4 (result:ABCD)

            		'segment'			=> 4, //default : 4 (result:ABCD-1234-A1B2-CDEF)

                    'seperator'         => "-", //default : - (result : ABCD-1234-A1B2-CDEF)

                    'charset'           => "0123456789ABCDEFGHIJKLMNPQRSTUWXYZ",//default : 0123456789ABCDEFGHIJKLMNPQRSTUWXYZ



            ];
