<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Helpers\ListHelper;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Validations\OrderDetailRequest;
use Illuminate\Support\Facades\Auth;

class FormDataController extends Controller
{
  /**
   * Return category attributes list
   *
   * @param $category_id
   * @return array
   */
  public function product_attributes(Product $product_id)
  {
    return ListHelper::product_attributes($product_id);
  }

  /**
   * Return category attributes list
   *
   * @param Category $category_id
   * @return array
   */
  public function category_attributes(Category $category_id)
  {
    return ListHelper::category_attributes($category_id);
  }

  /**
   * Return inventories list
   *
   * @return array
   */
  public function inventories()
  {
    return ListHelper::inventories();
  }

  /**
   * Return shipping carriers list
   *
   * @return array
   */
  public function shipping_carriers()
  {
    return ListHelper::carriers();
  }

  /**
   * Return list of warehouses
   *
   * @return array
   */
  public function warehouses()
  {
    return ListHelper::warehouses();
  }

  /**
   * Return list of suppliers
   *
   * @return array
   */
  public function suppliers()
  {
    return ListHelper::suppliers();
  }

  /**
   * Return list of delivery boys
   *
   * @return array
   */
  public function delivery_boys()
  {
    return ListHelper::deliveryBoys();
  }

  /**
   * Order statues
   * @return array
   */
  public function order_statuses()
  {
    return ListHelper::order_statuses();
  }

  /**
   * Item conditions
   * @return array
   */
  public function item_conditions()
  {
    return ListHelper::item_conditions();
  }

  /**
   * SEO tags
   * @return array
   */
  public function seo_tags()
  {
    return ListHelper::tags();
  }

  /**
   * subcategory groups
   * @return array
   */
  public function category_subgroups()
  {
    return ListHelper::catSubGrps();
  }

  /**
   * subcategory groups
   * @return array
   */
  public function category_subgroups_with_parent()
  {
    return ListHelper::catGrpSubGrpListArray();
  }

  /**
   * category group
   * @return array
   */
  public function category_groups()
  {
    return ListHelper::categoryGrps();
  }

  /**
   * Return category list with id and name
   *
   * @return array
   */
  public function categories()
  {
    return ListHelper::categories();
  }

  /**
   * Return category list with parent grp and subgrp
   *
   * @return array
   */
  public function categories_with_parent()
  {
    return ListHelper::catWithSubGrpListArray();
  }

  /**
   * Function return attribute types
   */
  public function attribute_types()
  {
    return ListHelper::attribute_types();
  }

  /**
   * This will return list of shop in marketplace
   * @return array
   */
  public function shops()
  {
    return ListHelper::shops();
  }

  /**
   * This is return all attributes
   */
  public function attributes()
  {
    return ListHelper::attributes();
  }

  /**
   * This is return all manufacturers
   */
  public function manufacturers()
  {
    return ListHelper::manufacturers();
  }

  /**
   * Formated business_days list
   *
   * @return array
   */
  public function business_days()
  {
    return ListHelper::business_days();
  }

  /**
   * This is return all countries
   */
  public function countries()
  {
    return ListHelper::countries();
  }

  /**
   * This will return all states of the given country
   */
  public function states($country_id)
  {
    return ListHelper::states($country_id);
  }

  /**
   * This will return available roles for authorized vendor
   */
  public function roles()
  {
    return Role::mine()->get(['id', 'name']);
  }

  /**
   * This will return available plans for authorized vendor
   */
  public function subscriptionPlans()
  {
    return ListHelper::subscriptionPlans();
  }

  /**
   * This will return gtin_types, gtin is global trade item number
   */
  public function gtin_type()
  {
    return ListHelper::gtin_types();
  }

  /**
   * This will return product tag list
   */
  public function tag_lists()
  {
    return ListHelper::tags();
  }
}
