<?php

class Product_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_products($limit = false, $offset = false)
    {
        $this->db->query("SET sql_mode = 'ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' ");
        
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        $this->db->select('products.*');
        $this->db->from('products');
        $this->db->select('c.name as category_name')->from('categories as c');
        $this->db->select('sc.name as subcategory_name')->from('subcategories as sc');
        $this->db->where('products.category_id = categories.id');
        $this->db->where('products.subcategory_id = subcategories.id');

        // $sql = "SELECT products.* , c.name as category_name, sc.name as subcategory_name FROM products INNER JOIN categories c ON products.category_id = c.id INNER JOIN subcategories sc ON products.subcategory_id = sc.id";
        
        // $this->db->order_by('rb', 'DESC');       
        $this->db->join('categories', 'c.id = products.category_id');
        $this->db->join('subcategories', 'sc.id = products.subcategory_id');
       
     $query = $this->db->get();
    //   $query = $this->db->query($sql);
        return $query->result_array();

    }

    public function get_one($id)
    {
        $this->db->query("SET sql_mode = 'ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' ");

        $sql = "SELECT products.* , c.name as category_name, sc.name as subcategory_name FROM products INNER JOIN categories c ON products.category_id = c.id INNER JOIN subcategories sc ON products.subcategory_id = sc.id WHERE products.id = ?";
        $query = $this->db->query($sql, $id);
        return $query->row_array();
    }
    public function get_recomended()
    {
        $this->db->query("SET sql_mode = 'ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' ");

        $this->db->where('recomended', true);
        $query = $this->db->get('products');
        return $query->result_array();

    }

    public function get_product_by_category($category_id)
    {
        $this->db->query("SET sql_mode = 'ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' ");
            $sql = "SELECT products.* , c.name as category_name, sc.name as subcategory_name FROM products INNER JOIN categories c ON products.category_id = c.id INNER JOIN subcategories sc ON products.subcategory_id = sc.id WHERE products.category_id = ?";
            $query = $this->db->query($sql, $category_id);
        return $query->result_array();
    }

    public function get_product_by_subcategory($subcategory)
    {
        $this->db->query("SET sql_mode = 'ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' ");
        $sql = "SELECT products.* , c.name as category_name, sc.name as subcategory_name FROM products INNER JOIN categories c ON products.category_id = c.id INNER JOIN subcategories sc ON products.subcategory_id = sc.id WHERE products.subcategory_id = ?";
        $query = $this->db->query($sql, $subcategory);
    return $query->result_array();
    }

    public function create_product($product_image)
    {
        $this->db->query("SET sql_mode = 'ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' ");
        $slug = url_title($this->input->post('title'));
        $slug = str_replace(array("č", "ć", "đ", "ž", "š", "Č", "Ć", "Đ", "Ž", "Š"), array("c", "c", "dj", "z", "s", "C", "C", "DJ", "Z", "S"), $slug);
        $data = array(
            'name' => $this->input->post('name'),
            'category_id' => $this->input->post('category_id'),
            'subcategory_id' => $this->input->post('subcategory_id'),
            'description' => $this->input->post('description'),
            'url' => $product_image,
            'power' => $this->input->post('power'),
            'gms' => $this->input->post('gms'),
            'resources' => $this->input->post('resources'),
            'parameter' => $this->input->post('parameter'),
            'inputs' => $this->input->post('inputs'),
            'outputs' => $this->input->post('outputs'),
            'cable' => $this->input->post('cable'),
            'accessories' => $this->input->post('accessories'),
            'commodity' => $this->input->post('commodity'),
            'appliances' => $this->input->post('appliances'),
            'other' => $this->input->post('other'),
            'recomended' => !empty($this->input->post('recomended')) ? 1 : 0,

            'it_name' => $this->input->post('it_name'),
            'it_description' => $this->input->post('it_description'),
            'it_power' => $this->input->post('it_power'),
            'it_gms' => $this->input->post('it_gms'),
            'it_resources' => $this->input->post('it_resources'),
            'it_parameter' => $this->input->post('it_parameter'),
            'it_inputs' => $this->input->post('it_inputs'),
            'it_outputs' => $this->input->post('it_outputs'),
            'it_cable' => $this->input->post('it_cable'),
            'it_accessories' => $this->input->post('it_accessories'),
            'it_commodity' => $this->input->post('it_commodity'),
            'it_appliances' => $this->input->post('it_appliances'),
            'it_other' => $this->input->post('it_other'),

            'sr_name' => $this->input->post('sr_name'),
            'sr_description' => $this->input->post('sr_description'),
            'sr_power' => $this->input->post('sr_power'),
            'sr_gms' => $this->input->post('sr_gms'),
            'sr_resources' => $this->input->post('sr_resources'),
            'sr_parameter' => $this->input->post('sr_parameter'),
            'sr_inputs' => $this->input->post('sr_inputs'),
            'sr_outputs' => $this->input->post('sr_outputs'),
            'sr_cable' => $this->input->post('sr_cable'),
            'sr_accessories' => $this->input->post('sr_accessories'),
            'sr_commodit y' => $this->input->post('sr_commodity'),
            'sr_appliances' => $this->input->post('sr_appliances'),
            'sr_other' => $this->input->post('sr_other'),
        );
        return $this->db->insert('products', $data);
    }

    public function delete_product($id)
    {
        unlink("assets/img/productimg/" . $_POST['zabrisanje']);
        $this->db->query("SET sql_mode = 'ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' ");
        $this->db->where('id', $id);
        $this->db->delete('products');
        return true;
    }

    public function update_product($product_image)
    {
        $this->db->query("SET sql_mode = 'ONLY_FULL_GROUP_BY,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' ");
        // $slug = url_title($this->input->post('title'));
        // $slug = str_replace(array("č", "ć", "đ", "ž", "š", "Č", "Ć", "Đ", "Ž", "Š"), array("c", "c", "dj", "z", "s", "C", "C", "DJ", "Z", "S"), $slug);
        if ($product_image === "noimage.jpg") {
            $data = array(
                'name' => $this->input->post('name'),
                'category_id' => $this->input->post('category_id'),
                'subcategory_id' => $this->input->post('subcategory_id'),
                'description' => $this->input->post('description'),
                'power' => $this->input->post('power'),
                'gms' => $this->input->post('gms'),
                'resources' => $this->input->post('resources'),
                'parameter' => $this->input->post('parameter'),
                'inputs' => $this->input->post('inputs'),
                'outputs' => $this->input->post('outputs'),
                'cable' => $this->input->post('cable'),
                'accessories' => $this->input->post('accessories'),
                'commodity' => $this->input->post('commodity'),
                'appliances' => $this->input->post('appliances'),
                'other' => $this->input->post('other'),
                'recomended' => !empty($this->input->post('recomended')) ? 1 : 0,
    
                'it_name' => $this->input->post('it_name'),
                'it_description' => $this->input->post('it_description'),
                'it_power' => $this->input->post('it_power'),
                'it_gms' => $this->input->post('it_gms'),
                'it_resources' => $this->input->post('it_resources'),
                'it_parameter' => $this->input->post('it_parameter'),
                'it_inputs' => $this->input->post('it_inputs'),
                'it_outputs' => $this->input->post('it_outputs'),
                'it_cable' => $this->input->post('it_cable'),
                'it_accessories' => $this->input->post('it_accessories'),
                'it_commodity' => $this->input->post('it_commodity'),
                'it_appliances' => $this->input->post('it_appliances'),
                'it_other' => $this->input->post('it_other'),
    
                'sr_name' => $this->input->post('sr_name'),
                'sr_description' => $this->input->post('sr_description'),
                'sr_power' => $this->input->post('sr_power'),
                'sr_gms' => $this->input->post('sr_gms'),
                'sr_resources' => $this->input->post('sr_resources'),
                'sr_parameter' => $this->input->post('sr_parameter'),
                'sr_inputs' => $this->input->post('sr_inputs'),
                'sr_outputs' => $this->input->post('sr_outputs'),
                'sr_cable' => $this->input->post('sr_cable'),
                'sr_accessories' => $this->input->post('sr_accessories'),
                'sr_commodity' => $this->input->post('sr_commodity'),
                'sr_appliances' => $this->input->post('sr_appliances'),
                'sr_other' => $this->input->post('sr_other'),
            );
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'category_id' => $this->input->post('category_id'),
                'subcategory_id' => $this->input->post('subcategory_id'),
                'description' => $this->input->post('description'),
                'url' => $product_image,
                'power' => $this->input->post('power'),
                'gms' => $this->input->post('gms'),
                'resources' => $this->input->post('resources'),
                'parameter' => $this->input->post('parameter'),
                'inputs' => $this->input->post('inputs'),
                'outputs' => $this->input->post('outputs'),
                'cable' => $this->input->post('cable'),
                'accessories' => $this->input->post('accessories'),
                'commodity' => $this->input->post('commodity'),
                'appliances' => $this->input->post('appliances'),
                'recomended' => !empty($this->input->post('recomended')) ? 1 : 0,
                'other' => $this->input->post('other'),
    
                'it_name' => $this->input->post('it_name'),
                'it_description' => $this->input->post('it_description'),
                'it_power' => $this->input->post('it_power'),
                'it_gms' => $this->input->post('it_gms'),
                'it_resources' => $this->input->post('it_resources'),
                'it_parameter' => $this->input->post('it_parameter'),
                'it_inputs' => $this->input->post('it_inputs'),
                'it_outputs' => $this->input->post('it_outputs'),
                'it_cable' => $this->input->post('it_cable'),
                'it_accessories' => $this->input->post('it_accessories'),
                'it_commodity' => $this->input->post('it_commodity'),
                'it_appliances' => $this->input->post('it_appliances'),
                'it_other' => $this->input->post('it_other'),
    
                'sr_name' => $this->input->post('sr_name'),
                'sr_description' => $this->input->post('sr_description'),
                'sr_power' => $this->input->post('sr_power'),
                'sr_gms' => $this->input->post('sr_gms'),
                'sr_resources' => $this->input->post('sr_resources'),
                'sr_parameter' => $this->input->post('sr_parameter'),
                'sr_inputs' => $this->input->post('sr_inputs'),
                'sr_outputs' => $this->input->post('sr_outputs'),
                'sr_cable' => $this->input->post('sr_cable'),
                'sr_accessories' => $this->input->post('sr_accessories'),
                'sr_commodity' => $this->input->post('sr_commodity'),
                'sr_appliances' => $this->input->post('sr_appliances'),
                'sr_other' => $this->input->post('sr_other'),
            );           
            if (file_exists($_POST['image'])) {
                unlink("assets/img/productimg/" . $_POST['image']);
            }
        }
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('products', $data);
    }
}
