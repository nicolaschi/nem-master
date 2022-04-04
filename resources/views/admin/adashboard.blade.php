
@include('admin.aheader')

               <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Dashboard</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Welcome back Admin</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
     <div class="nk-block-head-content">
      <div class="toggle-wrap nk-block-tools-toggle">
            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                         <ul class="nk-block-tools g-3">
                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                             <li class="nk-block-tools-opt">
                                    <div class="drodown">
                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">
                                            <li><a href="#"><em class="icon ni ni-user-add-fill"></em><span>Add User</span></a></li>
                                             <li><a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add Order</span></a></li>
                                             <li><a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add Page</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- .toggle-expand-content -->
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                     <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                            <h6 class="subtitle">Total Revenue</h6>
                                            </div>
                                        <div class="card-tools">
                                    <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Deposited"></em>
                                                        </div>
                                                    </div>
                                        <div class="card-amount">
                                        <span class="amount"> 456,490,595.34 <span class="currency currency-usd">NGN</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Paid Revenue</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Withdraw"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> 49,595.34 NGN
                                                    </div>
                                                    <div class="invest-data">
                                                        <div class="invest-data-ck">
                                                            <canvas class="iv-data-chart" id="totalWithdraw"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-4">
                                            <div class="card card-bordered  card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start mb-0">
                                                        <div class="card-title">
                                                            <h6 class="subtitle">Pending payment</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Balance in Account"></em>
                                                        </div>
                                                    </div>
                                                    <div class="card-amount">
                                                        <span class="amount"> 79,358.50 <span class="currency currency-usd">NGN</span>
                                                        </span>
                                                    </div>
                                                  
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner">
                                                    <div class="card-title-group mb-1">
                                                        <div class="card-title">
                                                            <h6 class="title">Users Overview</h6>
                                                            <p>The investment overview of your platform. <a href="#">All Investment</a></p>
                                                        </div>
                                                    </div>
                                                    <ul class="nav nav-tabs nav-tabs-card nav-tabs-xs">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#overview">Individuals</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#thisyear">Manufacturer</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#alltime">Engineers</a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content mt-0">
                                                        <div class="tab-pane active" id="overview">
                                                            <div class="invest-ov gy-2">
                                                                <div class="subtitle">Currently Actived Investment</div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        <div class="amount">49,395.395 <span class="currency currency-usd">NGN</span></div>
                                                                        <div class="title">Amount</div>
                                                                    </div>
                                                                    <div class="invest-ov-stats">
                                                                        <div><span class="amount"></span></div>
                                                                        <div class="title"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="invest-ov gy-2">
                                                                <div class="subtitle">Investment in this Month</div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                    <div class="amount">149,395.395 <span class="currency currency-usd">USD</span></div>
                                                                        <div class="title">Amount</div>
                                                                               
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="thisyear">
                                                            <div class="invest-ov gy-2">
                                                                <div class="subtitle">Currently Actived Investment</div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        <div class="amount">89,395.395 <span class="currency currency-usd">USD</span></div>
                                                                        <div class="title">Amount</div>
                                                                    </div>
                                                                    <div class="invest-ov-stats">
                                                                        <div><span class="amount"></span></div>
                                                                        <div class="title"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="invest-ov gy-2">
                                                                <div class="subtitle">Investment in this Month</div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        <div class="amount">149,395.395 <span class="currency currency-usd">USD</span></div>
                                                                        <div class="title">Amount</div>
                                                                    </div>
                                                                    <div class="invest-ov-stats">
                                                                        <div><span class="amount"></span></div>
                                                                        <div class="title"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="alltime">
                                                            <div class="invest-ov gy-2">
                                                                <div class="subtitle">Currently Actived Investment</div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        <div class="amount">249,395.395 <span class="currency currency-usd">USD</span></div>
                                                                        <div class="title">Amount</div>
                                                                    </div>
                                                                    <div class="invest-ov-stats">
                                                                        <div><span class="amount"></span></div>
                                                                        <div class="title"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        
                                                                        <div class="title"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="invest-ov gy-2">
                                                                <div class="subtitle">Investment in this Month</div>
                                                                <div class="invest-ov-details">
                                                                    <div class="invest-ov-info">
                                                                        <div class="amount">249,395.395 <span class="currency currency-usd">USD</span></div>
                                                                        <div class="title">Amount</div>
                                                                    </div>
                                                                    <div class="invest-ov-stats">
                                                                        <div><span class="amount"></span></div>
                                                                        <div class="title"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner d-flex flex-column h-100">
                                                    <div class="card-title-group mb-3">
                                                        <div class="card-title">
                                                            <h6 class="title">Top Invested Plan</h6>
                                                            <p>In last 30 days top invested schemes.</p>
                                                        </div>
                                                        <div class="card-tools mt-n4 mr-n1">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>15 Days</span></a></li>
                                                                        <li><a href="#" class="active"><span>30 Days</span></a></li>
                                                                        <li><a href="#"><span>3 Months</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="progress-list gy-3">
                                                        <div class="progress-wrap">
                                                            <div class="progress-text">
                                                                <div class="progress-label">Strater Plan</div>
                                                                <div class="progress-amount">58%</div>
                                                            </div>
                                                            <div class="progress progress-md">
                                                                <div class="progress-bar" data-progress="58"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-wrap">
                                                            <div class="progress-text">
                                                                <div class="progress-label">Silver Plan</div>
                                                                <div class="progress-amount">18.49%</div>
                                                            </div>
                                                            <div class="progress progress-md">
                                                                <div class="progress-bar bg-orange" data-progress="18.49"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-wrap">
                                                            <div class="progress-text">
                                                                <div class="progress-label">Dimond Plan</div>
                                                                <div class="progress-amount">16%</div>
                                                            </div>
                                                            <div class="progress progress-md">
                                                                <div class="progress-bar bg-teal" data-progress="16"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-wrap">
                                                            <div class="progress-text">
                                                                <div class="progress-label">Platinam Plan</div>
                                                                <div class="progress-amount">29%</div>
                                                            </div>
                                                            <div class="progress progress-md">
                                                                <div class="progress-bar bg-pink" data-progress="29"></div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-wrap">
                                                            <div class="progress-text">
                                                                <div class="progress-label">Vibranium Plan</div>
                                                                <div class="progress-amount">33%</div>
                                                            </div>
                                                            <div class="progress progress-md">
                                                                <div class="progress-bar bg-azure" data-progress="33"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="invest-top-ck mt-auto">
                                                        <canvas class="iv-plan-purchase" id="planPurchase"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                       
                                        
                                        <div class="col-xl-12 col-xxl-8">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">Recent Products</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <a href="{{url ('all_products')}}" class="link">View All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-list">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span>Plan</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span>Who</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span>Date</span></div>
                                                        <div class="nk-tb-col"><span>Amount</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span>&nbsp;</span></div>
                                                        <div class="nk-tb-col"><span>&nbsp;</span></div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="align-center">
                                                                <div class="user-avatar user-avatar-sm bg-light">
                                                                    <span>P1</span>
                                                                </div>
                                                                <span class="tb-sub ml-2">Silver <span class="d-none d-md-inline">- Daily 4.76% for 21 Days</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-xs bg-pink-dim">
                                                                    <span>JC</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Janice Carroll</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span class="tb-sub">18/10/2019</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="progress progress-sm w-80px">
                                                                <div class="progress-bar" data-progress="75"></div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown">
                                                                <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Print</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="align-center">
                                                                <div class="user-avatar user-avatar-sm bg-light">
                                                                    <span>P2</span>
                                                                </div>
                                                                <span class="tb-sub ml-2">Dimond <span class="d-none d-md-inline">- Daily 8.52% for 14 Days</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-xs bg-azure-dim">
                                                                    <span>VA</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Victoria Aguilar</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span class="tb-sub">18/10/2019</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-sub text-success">Completed</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown">
                                                                <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Print</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="align-center">
                                                                <div class="user-avatar user-avatar-sm bg-light">
                                                                    <span>P3</span>
                                                                </div>
                                                                <span class="tb-sub ml-2">Platinam <span class="d-none d-md-inline">- Daily 14.82% for 7 Days</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-xs bg-purple-dim">
                                                                    <span>EH</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Emma Henry</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span class="tb-sub">18/10/2019</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-sub text-success">Completed</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown">
                                                                <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Print</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="align-center">
                                                                <div class="user-avatar user-avatar-sm bg-light">
                                                                    <span>P1</span>
                                                                </div>
                                                                <span class="tb-sub ml-2">Silver <span class="d-none d-md-inline">- Daily 4.76% for 21 Days</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-xs bg-teal-dim">
                                                                    <span>AF</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Alice Ford</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span class="tb-sub">18/10/2019</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-sub text-success">Completed</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown">
                                                                <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Print</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col">
                                                            <div class="align-center">
                                                                <div class="user-avatar user-avatar-sm bg-light">
                                                                    <span>P3</span>
                                                                </div>
                                                                <span class="tb-sub ml-2">Platinam <span class="d-none d-md-inline">- Daily 14.82% for 7 Days</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <div class="user-card">
                                                                <div class="user-avatar user-avatar-xs bg-orange-dim">
                                                                    <span>HW</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Harold Walker</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span class="tb-sub">18/10/2019</span>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-sub tb-amount">1.094780 <span>BTC</span></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-sub text-success">Completed</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-action">
                                                            <div class="dropdown">
                                                                <a class="text-soft dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-chevron-right"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-xs">
                                                                    <ul class="link-list-plain">
                                                                        <li><a href="#">View</a></li>
                                                                        <li><a href="#">Invoice</a></li>
                                                                        <li><a href="#">Print</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


@include('admin.afooter')