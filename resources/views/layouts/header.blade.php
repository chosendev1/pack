<div class="header py-4">
  <div class="container">
    <div class="d-flex">
      <a class="header-brand" href="./index.html">
        <img src="/demo/brand/tabler.svg" class="header-brand-img" alt="tabler logo">
      </a>
      <div class="d-flex order-lg-2 ml-auto">
        <div class="nav-item d-none d-md-flex">
          <a href="https://github.com/tabler/tabler" class="btn btn-sm btn-outline-primary" target="_blank">Source code</a>
        </div>
        <div class="dropdown d-none d-md-flex">
          <a class="nav-link icon" data-toggle="dropdown">
            <i class="fe fe-bell"></i>
            <span class="nav-unread"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a href="#" class="dropdown-item d-flex">
              <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/male/41.jpg)"></span>
              <div>
                <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                <div class="small text-muted">10 minutes ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item d-flex">
              <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/1.jpg)"></span>
              <div>
                <strong>Alice</strong> started new task: Tabler UI design.
                <div class="small text-muted">1 hour ago</div>
              </div>
            </a>
            <a href="#" class="dropdown-item d-flex">
              <span class="avatar mr-3 align-self-center" style="background-image: url(demo/faces/female/18.jpg)"></span>
              <div>
                <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                <div class="small text-muted">2 hours ago</div>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
          </div>
        </div>
        <div class="dropdown">
          <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
            <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
            <span class="ml-2 d-none d-lg-block">
              <span class="text-default">Jane Pearson</span>
              <small class="text-muted d-block mt-1">Administrator</small>
            </span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
            <a class="dropdown-item" href="#">
              <i class="dropdown-icon fe fe-user"></i> Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="dropdown-icon fe fe-settings"></i> Settings
            </a>
            <a class="dropdown-item" href="#">
              <span class="float-right"><span class="badge badge-primary">6</span></span>
              <i class="dropdown-icon fe fe-mail"></i> Inbox
            </a>
            <a class="dropdown-item" href="#">
              <i class="dropdown-icon fe fe-send"></i> Message
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="dropdown-icon fe fe-help-circle"></i> Need help?
            </a>
            <a class="dropdown-item" href="#">
              <i class="dropdown-icon fe fe-log-out"></i> Sign out
            </a>
          </div>
        </div>
      </div>
      <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
        <span class="header-toggler-icon"></span>
      </a>
    </div>
  </div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
  <div class="container">
    <div class="row align-items-center">
     
      <div class="col-lg order-lg-first">
        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <i class="fe fe-settings"></i>
              Settings
            </a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="#" class="dropdown-item ">Institution</a>
              <a href="#" class="dropdown-item ">Branch</a>
              <a href="/loan-products" class="dropdown-item ">Loan Products</a>
              <a href="/customers/importation" class="dropdown-item ">Import Customers</a>
              <a href="/customers/importation" class="dropdown-item ">Import Loans</a>
              <a href="/payments/importation" class="dropdown-item ">Import Loan Payments</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="/dashboard" class="nav-link"><i class="fe fe-home"></i>Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="/customers" class="nav-link"><i class="fe fe-calendar"></i> Customers</a>
          </li>
          <li class="nav-item">
            <a href="/loan-applications" class="nav-link">
              <i class="fe fe-file"></i>Loans
            </a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <i class="fe fe-file-text"></i>
              Customer Reports
            </a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="/customers" class="dropdown-item ">Customers</a>
              <a href="/guarantors" class="dropdown-item ">Guarantors</a>
              <a href="/collaterals" class="dropdown-item ">Collaterals</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <i class="fe fe-file-text"></i>
              Loan Reports
            </a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="#" class="dropdown-item ">Application</a>
              <a href="#" class="dropdown-item ">Approval</a>
              <a href="#" class="dropdown-item ">Disbursement</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <i class="fe fe-file-text"></i>
              Payment Reports
            </a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="#" class="dropdown-item ">All Payments</a>
              <a href="#" class="dropdown-item ">Due Payments</a>
              <a href="#" class="dropdown-item ">Outstanding Payments</a>
              <a href="#" class="dropdown-item ">Arrears</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown">
              <i class="fe fe-bar-chart-2"></i>
              Performance Reports
            </a>
            <div class="dropdown-menu dropdown-menu-arrow">
              <a href="#" class="dropdown-item ">Ageing Report</a>
              <a href="#" class="dropdown-item ">Portifolio At Risk</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
