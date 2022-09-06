<?php $this->load->view('components/page_head') ?>

<?php $this->load->view('widgets/_layout_navbar') ?>

<div class="container-fluid">
  <div class="card mt-2 shadow-lg p-3 mb-5 bg-body rounded"> 
      <div class="card-body">
        <?php $this->load->view($subview); ?>
      </div>
  </div>
</div>
<?php $this->load->view('components/page_tail') ?>