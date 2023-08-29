<?php

function Name(){
    echo "Alparslan";
}
Name();

$surname = "Akbaş";

function MyName(){
    return $GLOBALS ['surname'] . ' ' . Name();
}
echo MyName();
?>
<div>

</div>
<?php
/*
Fonksiyonlara değişken verme
func_num_args()
func_get_args()
func_get_arg()
*/


function test(){
    echo func_num_args();
}
test("Alparslan","Akbaş");
?>

<div></div>

<?php
/*
 * Recursive Fonksiyonlar
 */

    $blogCategories= [
        [
            'id' =>1,
            'title'=>"Global Energy"
        ],
        [
            'id' =>2,
            'title'=>"Fifa Football"
        ],
        [
            'id' =>3,
            'title'=>"Terorizm"
        ]
    ];

    function getBlogList($blogCategories){
        echo  '<ul>';
        foreach ($blogCategories as $blogCategory){
            echo '<li>'
                    .$blogCategory['title'].
                  '</li>';
        }
        echo  '</ul>';
    }
    getBlogList($blogCategories);





















