<?php

/**
 *
 * @author JAMES
 */
interface IRestModel {
    //put your code here
    function get($id);
    function getAll(); 
    function post($serverData);
    function put($id);
    function delete($id);
}
