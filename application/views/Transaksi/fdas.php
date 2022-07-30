<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>

    <section class=" content-header">
        <h1>Sales
            <small>Penjualan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#" class="fa fa-dashboard"></a></li>
            <li>Transaction</li>
            <li class="active">Sales</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-4">
                <div class="box box-widget">
                    <div class="box-body">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align: top;">
                                    <Label for="date">Date</Label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="date" id="date" value="<?= date('Y-m-d') ?>" class="form-control" readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">
                                    <Label for="user">Kasir</Label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" id="user" value="" class="form-control">

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">
                                    <Label for="customer">Customer</Label>
                                </td>
                                <td>
                                    <div>
                                        <select id="customer" class="form-control">
                                            <Option value="">Umum</Option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box box-widget">
                    <div class="box-body">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align: top; width:30%;">
                                    <label for="Barcode"> Barcode</label>
                                </td>
                                <td>
                                    <div class="form-group input-group">
                                        <input type="hidden" id="item_id">
                                        <input type="hidden" id="price">
                                        <input type="hidden" id="stock">
                                        <input type="text" id="barcode" class="form-control" autofocus>
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat" data-toggle="modal" data-target="#modal-item">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </td>
                            </tr>
                            <tr style="vertical-align: top;">
                                <td>

                                    <label for="qty"> Qty</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" id="Qty" value="1" min="1" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div>
                                        <button type="button" id="add_cart" class="btn btn-primary">
                                            <i class="fa fa-cart-plus"></i> Add
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="box box-widget">
                    <div class="box-body">
                        <div align="right">
                            <h4>Invoice <b> <span id="invoice">MP1909250001</span></b></h4>
                            <h1><b><span id="grand_total" style="font-size: 50pt;">0</span></b></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="box box-widget">
                    <div class="box-body table-responsive">
                        <table class="table-bordered table-stripped table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Barcode</th>
                                    <th>Product Items</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th width="10%">Discount Item</th>
                                    <th width="15%">Total</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="cart_table">
                                <tr>
                                    <td colspan="9" class="text-center">Tidak ada item</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="box-widget box">
                    <div class="box-body">
                        <table width=100%>
                            <tr>
                                <td style="vertical-align: top; width:30%;">
                                    <label for="sub_total">Sub Total</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" id="sub_total" value="" class="form-control" readonly>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">
                                    <label for="dicount">Discount</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" id="discount" value="0" min="0" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">
                                    <label for="grand_total">Grand Total</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" id="grand_total" class="form-control" readonly>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box box-widget">
                    <div class="box-body">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align:top; width:30">
                                    <label for="cash">Cash</label>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" id="cash" value="0" min="0" class="form-control">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;">
                                    <label for="change"> Change</label>
                                </td>
                                <td>
                                    <div>
                                        <input type="number" class="form-control" id="change" readonly>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="box box-widget">
                    <div class="box-body">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align: top;">
                                    <label for="note">Note</label>
                                </td>
                                <td>
                                    <div>
                                        <textarea class="form-control" id="note" rows="3"></textarea>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div>
                    <button id="cancel_payment" class="btn btn-flat btn-warning">
                        <i class="fa fa-refresh"></i> Cancel
                    </button>
                    <button id="process_payment" class="btn btn-flat btn-lg btn-success">
                        <i class="fa fa-paper-plane-o"></i> Process Payment
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>