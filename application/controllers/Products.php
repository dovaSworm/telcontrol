<?php
class Products extends CI_Controller
{

    public function start()
    {
        // $data['title'] = $data['product']['title'];
        // $data['subcategories'] = $this->subcategory_model->get_subcategories();
        // $data['categories'] = $this->category_model->get_categories();
        $data['products'] = $this->product_model->get_product_by_category(5);
        // echo json_encode($data);
        $this->load->view('templates/header');
        // $this->load->view('templates/menu');
        $this->load->view('pages/products', $data);
        $this->load->view('templates/footer');
    }

    public function napravi()
    {
        $naslov['title'] = 'Telcontrol';
        $data['title'] = "create product";
        $data['subcategories'] = $this->subcategory_model->get_subcategories();
        $data['categories'] = $this->category_model->get_categories();
        $this->load->view('templates/header');
        // $this->load->view('templates/menu');
        $this->load->view('products/create', $data);
        $this->load->view('templates/footer');
    }
    public function index($offset = 0)
    {
//pagination config
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'products/index';
        $config['total_rows'] = $this->db->count_all('products');
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['num_links'] = 2;
        $config['first_link'] = "First";
        $config['last_link'] = false;
        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li><i class="fa fa-long-arrow-right"></i>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = 'Previous';
        $config['prev_tag_open'] = '<li><i class="fa fa-long-arrow-left"></i>';
        $config['prev_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'pagination-links');
// init pagination

        $naslov['title'] = 'Telcontrol products';
        if (isset($_GET['category'])) {
            $data['products'] = $this->product_model->get_product_by_category($_GET['category']);
            if (empty($data['products'])) {
                show_error('Ne postoje traženi artikli / There is no wanted products', 404, $heading = 'Greška/Error');
            }
        } elseif (isset($_GET['subcategory'])) {

            $data['products'] = $this->product_model->get_product_by_subcategory($_GET['subcategory']);
            if (empty($data['products'])) {
                show_error('Ne postoje traženi artikli / There is no wanted products', 404, $heading = 'Greška/Error');
            }
        } else {
            $data['products'] = $this->product_model->get_products($config['per_page'], $offset);
            if (empty($data['products'])) {
                show_error('Ne postoje traženi artikli', 404, $heading = 'Greška');
            }
        }
        if (count($data['products']) >= 5) {
            $this->pagination->initialize($config);
        }
        $this->load->view('templates/header', $naslov);
        // $this->load->view('templates/hero');
        $this->load->view('templates/menu');
        $this->load->view('products/index', $data);
        // $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function view($id = null)
    {
        $naslov['title'] = 'Telcontrol';
        $data['product'] = $this->product_model->get_one($id);

        if (empty($data['product'])) {
            show_404();
        }
        $data['title'] = $data['product']['name'];
        $this->load->view('templates/header', $naslov);
        $this->load->view('templates/menu');
        $this->load->view('products/view', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $naslov['title'] = 'Telcontrol';
        $data['title'] = "create product";

        $data['categories'] = $this->category_model->get_categories();
        $data['subcategories'] = $this->subcategory_model->get_subcategories();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('category_id', 'Category', 'required');
        $this->form_validation->set_rules('subcategory_id', 'Subcategory', 'required');

        if ($this->form_validation->run() === false) {
            $this->load->view('templates/header', $naslov);
            $this->load->view('products/create', $data);
            $this->load->view('templates/footer');

        } else {
            //upload image
            $config['upload_path'] = './assets/img/productimg';
            $config['allowed_types'] = 'gif|jpg|png|PNG|JPG|GIF';
            $config['max_size'] = '2048';
            $config['max_width'] = '700';
            $config['max_height'] = '700';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                // $product_image = "nemaslike.jpg";
            } else {
                $data = array('upload_data' => $this->upload->data());
                $product_image = $_FILES['userfile']['name'];
            }
            $this->product_model->create_product($product_image);

            $this->session->set_flashdata('product_created', 'Proizvod uspesno dodan u bazu');
            redirect('products/napravi');
        }
    }

    public function delete($id)
    {
        $this->product_model->delete_product($id);
        $this->session->set_flashdata('product_deleted', 'Proizvod uspesno obrisan');
        redirect('products');
    }

    public function edit($id)
    {
        echo "usao u edit";
        // $naslov['naslov'] = 'Edit';
        $data['product'] = $this->product_model->get_one($id);
        $data['categories'] = $this->category_model->get_categories();
        $data['subcategories'] = $this->subcategory_model->get_subcategories();

        if (empty($data['product'])) {
            show_404();
        }
        $data['page_title'] = 'Edit product';

        $this->load->view('templates/header');
        $this->load->view('products/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        echo "usao u update";
        $config['upload_path'] = './assets/img/productimg';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '700';
        $config['max_height'] = '700';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $errors = array('error' => $this->upload->display_errors());
            $product_image = 'noimage.jpg';
        } else {
            $data = array('upload_data' => $this->upload->data());
            $product_image = $_FILES['userfile']['name'];
        }
        $this->product_model->update_product($product_image);
        echo "usao u update dole";
        $this->session->set_flashdata('product_updated', 'Proizvod uspesno izmenjen');
        redirect('products');
    }
}