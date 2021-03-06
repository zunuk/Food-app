<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemplateRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'template_carbohydrates_bread.plain_bread' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.koppe_bread' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.croissant' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.bread_roll' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.bagel' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.danish' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.scone' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.baguette' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.batal' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.naan' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.grissini' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_bread.muffin' => 'required|numeric|min:0|max:2000000000',
            
            'template_carbohydrates_cereals.rice' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_cereals.brown_rice' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_cereals.millet' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_cereals.sticky_rice' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_cereals.rice_cake' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_cereals.mochikinchaku' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_cereals.cereal' => 'required|numeric|min:0|max:2000000000',
            
            'template_carbohydrates_noodles.udon' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_noodles.somen' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_noodles.soba' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_noodles.pasta' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_noodles.ramen' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_noodles.fried_noodle' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_noodles.tsukemen' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_noodles.hiyamugi' => 'required|numeric|min:0|max:2000000000',
            'template_carbohydrates_noodles.cold_noodle' => 'required|numeric|min:0|max:2000000000',
            
            'template_vegetable.asparagus' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.pumpkin' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.cabbage' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.burdock' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.satsumaimo' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.sansai' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.potato' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.crowndaisy' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.garlic' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.celery' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.daikon' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.banboo_shoots' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.onion' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.been_seedlings' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.corn' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.tomato' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.eggplant' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.carrot' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.green_onion' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.chinese_cabbage' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.green_pepper' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.broccoli' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.rakkyo' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.lettuce' => 'required|numeric|min:0|max:2000000000',
            'template_vegetable.lotus_root' => 'required|numeric|min:0|max:2000000000',
            
            'template_mushroom.enokitake_red' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.enokitake_brown' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.bunashimeji_brown' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.bunashimeji_white' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.shitake' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.king_trumpet' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.maitake' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.maitake_white' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.nameko' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.mushroom' => 'required|numeric|min:0|max:2000000000',
            'template_mushroom.oyster_mushroom' => 'required|numeric|min:0|max:2000000000',
            
            'template_bean.edamame' => 'required|numeric|min:0|max:2000000000',
            'template_bean.soybean' => 'required|numeric|min:0|max:2000000000',
            'template_bean.greenpeace' => 'required|numeric|min:0|max:2000000000',
            'template_bean.broad_bean' => 'required|numeric|min:0|max:2000000000',
            'template_bean.peanut' => 'required|numeric|min:0|max:2000000000',
            'template_bean.endomame' => 'required|numeric|min:0|max:2000000000',
            'template_bean.green_bean' => 'required|numeric|min:0|max:2000000000',
            
            'template_marine_products.horse_mackerel' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.anago' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.squid' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.ikura' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.sardine' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.unagi' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.sea_urchin' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.herring_roe' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.skipjack' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.crab' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.salmon' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.mackerel' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.pacific_saury' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.shishamo' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.shirasu' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.sujiko' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.sea_bream' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.octopus' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.cod' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.tarako' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.chirimen' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.puffer_fish' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.hokke' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.tuna' => 'required|numeric|min:0|max:2000000000',
            'template_marine_products.mentaiko' => 'required|numeric|min:0|max:2000000000',
            
            'template_shrimp.whiteleg_shrimp' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.red_shrimp' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.black_tiger_shrimp' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.kurumaebi' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.button_shrimp' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.sweet_shrimp' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.shiba_shrimp' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.sakura_shrimp' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.spiny_lobster' => 'required|numeric|min:0|max:2000000000',
            'template_shrimp.lobster' => 'required|numeric|min:0|max:2000000000',
            
            'template_seaweed.namamekabu' => 'required|numeric|min:0|max:2000000000',
            'template_seaweed.namamozuku' => 'required|numeric|min:0|max:2000000000',
            'template_seaweed.namawakame' => 'required|numeric|min:0|max:2000000000',
            
            'template_shellfish.asari' => 'required|numeric|min:0|max:2000000000',
            'template_shellfish.oyster' => 'required|numeric|min:0|max:2000000000',
            'template_shellfish.shijimi' => 'required|numeric|min:0|max:2000000000',
            'template_shellfish.hamaguri' => 'required|numeric|min:0|max:2000000000',
            'template_shellfish.scallop' => 'required|numeric|min:0|max:2000000000',
            'template_shellfish.hard_clam' => 'required|numeric|min:0|max:2000000000',
            
            'template_beef.beef_minced' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_shoulder' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_boston_butt' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_ribulose' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_sirloin' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_fillet' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_ribs' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_thigh' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_rump' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_shin' => 'required|numeric|min:0|max:2000000000',
            'template_beef.beef_neck' => 'required|numeric|min:0|max:2000000000',
            
            'template_pork.pork_minced' => 'required|numeric|min:0|max:2000000000',
            'template_pork.pork_shoulder' => 'required|numeric|min:0|max:2000000000',
            'template_pork.pork_boston_butt' => 'required|numeric|min:0|max:2000000000',
            'template_pork.pork_lose' => 'required|numeric|min:0|max:2000000000',
            'template_pork.pork_fillet' => 'required|numeric|min:0|max:2000000000',
            'template_pork.pork_ribs' => 'required|numeric|min:0|max:2000000000',
            'template_pork.pork_thigh' => 'required|numeric|min:0|max:2000000000',
            
            'template_chicken.chicken_breast' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_thigh' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_scissor' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_heart' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_lever' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_sand' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_wing' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_neck_skin' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_cartilage' => 'required|numeric|min:0|max:2000000000',
            'template_chicken.chicken_tail' => 'required|numeric|min:0|max:2000000000',
            
            'template_mutton.mutton_lose' => 'required|numeric|min:0|max:2000000000',
            'template_mutton.mutton_shoulder' => 'required|numeric|min:0|max:2000000000',
            'template_mutton.mutton_boston_butt' => 'required|numeric|min:0|max:2000000000',
            'template_mutton.mutton_thigh' => 'required|numeric|min:0|max:2000000000',
            'template_mutton.mutton_ribs' => 'required|numeric|min:0|max:2000000000',
            
            'template_other_meat.duck_meat' => 'required|numeric|min:0|max:2000000000',
            'template_other_meat.venison' => 'required|numeric|min:0|max:2000000000',
            'template_other_meat.turckey' => 'required|numeric|min:0|max:2000000000',
            'template_other_meat.bacon' => 'required|numeric|min:0|max:2000000000',
            'template_other_meat.ham' => 'required|numeric|min:0|max:2000000000',
            'template_other_meat.sausage' => 'required|numeric|min:0|max:2000000000',
            
            'template_eggmilk.yogurt' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.milk' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.fresh_cream' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.butter' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.margarine' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.egg' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.quail_egg' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.century_egg' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.hot_spring_egg' => 'required|numeric|min:0|max:2000000000',
            'template_eggmilk.smoked_egg' => 'required|numeric|min:0|max:2000000000',
            
            'template_cheese.camembert_cheese' => 'required|numeric|min:0|max:2000000000',
            'template_cheese.cream_cheese' => 'required|numeric|min:0|max:2000000000',
            'template_cheese.gorgonzola_cheese' => 'required|numeric|min:0|max:2000000000',
            'template_cheese.gouda_cheese' => 'required|numeric|min:0|max:2000000000',
            'template_cheese.cheddar_cheese' => 'required|numeric|min:0|max:2000000000',
            'template_cheese.mascarpone_cheese' => 'required|numeric|min:0|max:2000000000',
            'template_cheese.mozzarella_cheese' => 'required|numeric|min:0|max:2000000000',
            
            'template_fruits.apricot' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.strawberry' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.fig' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.plum' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.orange' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.persimmon' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.kiwifruit' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.chestnut' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.grapefruit' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.cherry' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.pomegranate' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.watermelon' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.japanese_pear' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.pear' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.pineapple' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.banana' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.loquat' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.grape' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.blueberry' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.other_berries' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.mango' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.mikan' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.melon' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.peach' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.apple' => 'required|numeric|min:0|max:2000000000',
            'template_fruits.lemon' => 'required|numeric|min:0|max:2000000000',
            
            'template_tohunattopickles.atsuage' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.fried_tohu' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.salted_plum' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.kimchi' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.konjac' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.zha_cai' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.shirataki' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.pickled_radish' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.tsukudani' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.tohu' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.tohuyou' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.natto' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.namayuba' => 'required|numeric|min:0|max:2000000000',
            'template_tohunattopickles.menma' => 'required|numeric|min:0|max:2000000000',
            
            'template_kneaded_material.kamaboko' => 'required|numeric|min:0|max:2000000000',
            'template_kneaded_material.datemaki' => 'required|numeric|min:0|max:2000000000',
            'template_kneaded_material.tsumire' => 'required|numeric|min:0|max:2000000000',
            'template_kneaded_material.namachikuwa' => 'required|numeric|min:0|max:2000000000',
            'template_kneaded_material.hanpen' => 'required|numeric|min:0|max:2000000000',
            'template_kneaded_material.yakichikuwa' => 'required|numeric|min:0|max:2000000000',
            
            'template_powders.okonomiyaki_flour' => 'required|numeric|min:0|max:2000000000',
            'template_powders.starch' => 'required|numeric|min:0|max:2000000000',
            'template_powders.fried_chicken_flour' => 'required|numeric|min:0|max:2000000000',
            'template_powders.flour' => 'required|numeric|min:0|max:2000000000',
            'template_powders.wheat_germ' => 'required|numeric|min:0|max:2000000000',
            'template_powders.rice_flour' => 'required|numeric|min:0|max:2000000000',
            'template_powders.cornstarch' => 'required|numeric|min:0|max:2000000000',
            'template_powders.buckwheat_flour' => 'required|numeric|min:0|max:2000000000',
            'template_powders.takoyaki_flour' => 'required|numeric|min:0|max:2000000000',
            'template_powders.tempura_flour' => 'required|numeric|min:0|max:2000000000',
            'template_powders.non_fried_flour' => 'required|numeric|min:0|max:2000000000',
            'template_powders.bread_crumbs' => 'required|numeric|min:0|max:2000000000',
            'template_powders.husuma' => 'required|numeric|min:0|max:2000000000',
            
            'template_dried_material.green_laver' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.seasoned_seaweed' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.katsuobushi' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.dried_hijiki' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.dried_beans' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.dried_vagetables' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.dried_yuba' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.dried_seaweed' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.kanpyo' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.wood_ear' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.kinako' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.kiriboshi_daikon' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.kuzukiri' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.kezuribushi' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.koya_tohu' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.sesame' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.dashi_kelp' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.tororo_kelp' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.niboshi' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.harusame' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.wheat_bran' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.hurikake' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.dried_shrimp' => 'required|numeric|min:0|max:2000000000',
            'template_dried_material.grilled_seaweed' => 'required|numeric|min:0|max:2000000000',
            
            'template_canned_bottled.canned_fish_and_shellfish' => 'required|numeric|min:0|max:2000000000',
            'template_canned_bottled.canned_fruit' => 'required|numeric|min:0|max:2000000000',
            
            'template_seasoning.worcestershire_sauce' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.ketchup' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.sugar' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.salt' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.vinegar' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.soy_sauce' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.dashi' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.ponzu_sauce' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.mayonnaise' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.miso' => 'required|numeric|min:0|max:2000000000',
            'template_seasoning.noodle_soup' => 'required|numeric|min:0|max:2000000000',
            
            'template_dressing.italian_dressing' => 'required|numeric|min:0|max:2000000000',
            'template_dressing.green_perilla_dressing' => 'required|numeric|min:0|max:2000000000',
            'template_dressing.sesame_dressing' => 'required|numeric|min:0|max:2000000000',
            'template_dressing.caesar_dressing' => 'required|numeric|min:0|max:2000000000',
            'template_dressing.soy_sauce_dressing' => 'required|numeric|min:0|max:2000000000',
            'template_dressing.chinese_dressing' => 'required|numeric|min:0|max:2000000000',
            'template_dressing.french_dressing' => 'required|numeric|min:0|max:2000000000',
            'template_dressing.wasabi_soy_sauce_dressing' => 'required|numeric|min:0|max:2000000000',
            
            'template_yakumi.oba' => 'required|numeric|min:0|max:2000000000',
            'template_yakumi.ginger' => 'required|numeric|min:0|max:2000000000',
            'template_yakumi.mitsuba' => 'required|numeric|min:0|max:2000000000',
            'template_yakumi.japanese_ginger' => 'required|numeric|min:0|max:2000000000',
            'template_yakumi.yuzu' => 'required|numeric|min:0|max:2000000000',
            'template_yakumi.wasabi' => 'required|numeric|min:0|max:2000000000',
            
            'template_herbs.coriander' => 'required|numeric|min:0|max:2000000000',
            'template_herbs.basil' => 'required|numeric|min:0|max:2000000000',
            'template_herbs.parsley' => 'required|numeric|min:0|max:2000000000',
            'template_herbs.arugula' => 'required|numeric|min:0|max:2000000000',
            'template_herbs.lemongrass' => 'required|numeric|min:0|max:2000000000',
            'template_herbs.rosemary' => 'required|numeric|min:0|max:2000000000',
            
            'template_oil.flaxseed_oil' => 'required|numeric|min:0|max:2000000000',
            'template_oil.egoma_oil' => 'required|numeric|min:0|max:2000000000',
            'template_oil.olive_oil' => 'required|numeric|min:0|max:2000000000',
            'template_oil.coconut_oil' => 'required|numeric|min:0|max:2000000000',
            'template_oil.sesame_oil' => 'required|numeric|min:0|max:2000000000',
            'template_oil.corn_oil' => 'required|numeric|min:0|max:2000000000',
            'template_oil.salad_oil' => 'required|numeric|min:0|max:2000000000',
            'template_oil.rapeseed_oil' => 'required|numeric|min:0|max:2000000000',
            
            'template_spices.garlic_spice' => 'required|numeric|min:0|max:2000000000',
            'template_spices.cumin' => 'required|numeric|min:0|max:2000000000',
            'template_spices.pepper' => 'required|numeric|min:0|max:2000000000',
            'template_spices.shichimi' => 'required|numeric|min:0|max:2000000000',
            'template_spices.cinnamon' => 'required|numeric|min:0|max:2000000000',
            'template_spices.turmeric' => 'required|numeric|min:0|max:2000000000',
            'template_spices.chili' => 'required|numeric|min:0|max:2000000000',
            
            'template_title_body.title' => 'required|string|max:100',
            'template_title_body.body' => 'max:2000'
        ];
    }
}
