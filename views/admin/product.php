<?php 
view('layout.header-admin');
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Quản lý nhà sản xuất</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Bảng dữ liệu
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <!-- add acc -->
                        <button type="button" class="btn btn-dark mb-4" data-bs-toggle="modal" data-bs-target="#add">Thêm tài khoản</button>
                            <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Thêm tài khoản</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- body -->
                            <div class="modal-body">
                                <div class="input-group  flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3"  id="addon-wrapping">Tên tài khoản</span>
                                    <input type="text" class="form-control" placeholder="Tên tài khoản" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Họ và tên</span>
                                    <input type="text" class="form-control" placeholder="Họ và tên" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Ngày sinh</span>
                                    <input type="text" class="form-control" placeholder="Ngày sinh" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                                <div class="input-group flex-nowrap mb-2 ">
                                    <span class="input-group-text col-md-3" id="addon-wrapping">Quê quán</span>
                                    <input type="text" class="form-control" placeholder="Quê quán" aria-label="Username" aria-describedby="addon-wrapping">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                <button type="button" class="btn btn-primary">Lưu</button>
                            </div>
                            </div>
                        </div>
                        </div>

                        <!-- table -->
                        <thead>
                            <tr>
                                <th>Tên tài khoản</th>
                                <th>Họ và tên</th>
                                <th>Ngày sinh</th>
                                <th>Quê quán</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Sửa </th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-sm "style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#edit">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </td>
                                <td>
                                <button type="button" class="btn btn-outline-dark btn-sm" style="margin-left: 10px;" data-bs-toggle="modal" data-bs-target="#detele">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                                </td>
                            </tr>

                            <!-- Modal edit -->
                            <div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Sửa thông tin</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="input-group  flex-nowrap mb-2 ">
                                            <span class="input-group-text col-md-3"  id="addon-wrapping">Tên tài khoản</span>
                                            <input type="text" class="form-control" placeholder="Tên tài khoản" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="input-group flex-nowrap mb-2 ">
                                            <span class="input-group-text col-md-3" id="addon-wrapping">Họ và tên</span>
                                            <input type="text" class="form-control" placeholder="Họ và tên" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="input-group flex-nowrap mb-2 ">
                                            <span class="input-group-text col-md-3" id="addon-wrapping">Ngày sinh</span>
                                            <input type="text" class="form-control" placeholder="Ngày sinh" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                        <div class="input-group flex-nowrap mb-2 ">
                                            <span class="input-group-text col-md-3" id="addon-wrapping">Quê quán</span>
                                            <input type="text" class="form-control" placeholder="Quê quán" aria-label="Username" aria-describedby="addon-wrapping">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                        <button type="button" class="btn btn-primary">Lưu</button>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal delete -->
                            <div class="modal fade" id="detele" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Bạn có chắc chắn muốn xóa</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="margin:auto;">
                                        <button type="button" class="btn btn-primary mx-3  ">Xóa</button>                                       
                                        <button type="button" class="btn btn-secondary mx-3" data-bs-dismiss="modal">Hủy</button>

                                    </div>
                                </div>
                            </div>
                            </div>

                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>$136,200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                    
        </div>
    </main>

<?php 
view('layout.footer-admin');
?>