<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAddress()
    {
        $addressJson = '{"address":"11 Mount Leyshon Road","city":"Gordon","state":"NSW","zip":"2072"}';
        $decodeAddress = json_decode($addressJson, true);
        print_r("Original Address : " . $decodeAddress['address']);
        $splitAddress = explode("/", $decodeAddress['address']);
        print_r("\n");
        $flatNumber = " ";
        $strNumber = " ";
        $strName = " ";
        $strType = " ";
        if(str_contains($decodeAddress['address'], "/")){
            print_r("\ncontains slash");
            if(str_contains($splitAddress[1], "-")){
                print_r("\ncontains hyphen");
                $furtherSplitAddress = explode(" ",  $splitAddress[1]);
                $strNumber = $furtherSplitAddress[0];
                $flatNumber = $splitAddress[0];
                for ($i = 1 ; $i < count($furtherSplitAddress) ; $i++){
                    $strName .= $furtherSplitAddress[$i]. " ";
                }
                // $strName = $furtherSplitAddress[1]. " ". $furtherSplitAddress[2];
                print_r("\n Unit Number : " . $flatNumber);
                print_r("\n Street Number : " . $strNumber);
                print_r("\n Street Name : " . $strName);
                print_r("\n City : " . $decodeAddress['city']);
                print_r("\n State : " . $decodeAddress['state']);
                print_r("\n Zip : " . $decodeAddress['zip']);
            }
        } else if (str_contains($decodeAddress['address'], "-")){
            print_r("\ncontains hyphen");
            $furtherSplitAddress = explode(" ",  $decodeAddress['address']);
            $strNumber = $furtherSplitAddress[0];
            for ($i = 1 ; $i < count($furtherSplitAddress) ; $i++){
                $strName .= $furtherSplitAddress[$i]. " ";
            }
            // $strName = $furtherSplitAddress[1]. " ". $furtherSplitAddress[2];
            print_r("\n Street Number : " . $strNumber);
            print_r("\n Street Name : " . $strName);
            print_r("\n City : " . $decodeAddress['city']);
            print_r("\n State : " . $decodeAddress['state']);
            print_r("\n Zip : " . $decodeAddress['zip']);
        } else {
            $furtherSplitAddress = explode(" ",  $decodeAddress['address']);
            $strNumber = $furtherSplitAddress[0];
            for ($i = 1 ; $i < count($furtherSplitAddress) ; $i++){
                $strName .= $furtherSplitAddress[$i]. " ";
            }
            // $strName = $furtherSplitAddress[1]. " ". $furtherSplitAddress[2];
            print_r("\n Street Number : " . $strNumber);
            print_r("\n Street Name : " . $strName);
            print_r("\n City : " . $decodeAddress['city']);
            print_r("\n State : " . $decodeAddress['state']);
            print_r("\n Zip : " . $decodeAddress['zip']);
            print_r("\n Santhosh test reset : ");
        }
    }
}
