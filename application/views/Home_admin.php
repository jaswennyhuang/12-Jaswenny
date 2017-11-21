<!doctype html>
<html lang="en">
<?php $this->load->view('Header_admin');?> 
 <?=$this->session->flashdata('gagal')?>
     <?=$this->session->flashdata('pesan')?>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card"> <!--ungu-->
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title" >Beranda</h4>
                                    
                                   <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                  <h3 style="font-family:Times New Roman;"> Selamat datang pada Halaman Admin <br><br>
                                   Jaga Kerahasiaan data anda!          
                               </h3>                     
                                </div>
                            </div>
                        </div>

                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br>
                <?php $this->load->view('Footer_admin');?> 
                </div>
            </div> 
             
            </html>

                           


