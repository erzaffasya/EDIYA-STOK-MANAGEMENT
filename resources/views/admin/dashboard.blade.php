<x-app-layout>
<div class="content-wrapper">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
              <div class="container-xxl d-flex h-100">
                <ul class="menu-inner">
                  <!-- Dashboards -->
                  <li class="menu-item active">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                      <div data-i18n="Dashboards">Dashboards</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="app-ecommerce-dashboard.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-cart-outline"></i>
                          <div data-i18n="eCommerce">eCommerce</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="dashboards-crm.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                          <div data-i18n="CRM">CRM</div>
                        </a>
                      </li>
                      <li class="menu-item active">
                        <a href="index.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-chart-timeline-variant"></i>
                          <div data-i18n="Analytics">Analytics</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-logistics-dashboard.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-truck-outline"></i>
                          <div data-i18n="Logistics">Logistics</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-academy-dashboard.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
                          <div data-i18n="Academy">Academy</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Layouts -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-window-maximize"></i>
                      <div data-i18n="Layouts">Layouts</div>
                    </a>

                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="layouts-without-menu.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-page-layout-header-footer"></i>
                          <div data-i18n="Without menu">Without menu</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="../vertical-menu-template/" class="menu-link" target="_blank">
                          <i class="menu-icon tf-icons mdi mdi-dock-left"></i>
                          <div data-i18n="Vertical">Vertical</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="layouts-fluid.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-dock-top"></i>
                          <div data-i18n="Fluid">Fluid</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="layouts-container.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-dock-window"></i>
                          <div data-i18n="Container">Container</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="layouts-blank.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-page-layout-body"></i>
                          <div data-i18n="Blank">Blank</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Apps -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-apps"></i>
                      <div data-i18n="Apps">Apps</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="app-email.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
                          <div data-i18n="Email">Email</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-chat.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-message-outline"></i>
                          <div data-i18n="Chat">Chat</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-calendar.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
                          <div data-i18n="Calendar">Calendar</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="app-kanban.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-view-grid-outline"></i>
                          <div data-i18n="Kanban">Kanban</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-domain"></i>
                          <div data-i18n="eCommerce">eCommerce</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-ecommerce-dashboard.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Dashboard">Dashboard</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Products">Products</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-ecommerce-product-list.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Product list">Product list</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-product-add.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Add Product">Add Product</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-category-list.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Category list">Category List</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Order">Order</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-ecommerce-order-list.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Order list">Order list</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-order-details.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Order Details">Order Details</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Customer">Customer</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-ecommerce-customer-all.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="All Customers">All Customers</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Customer Details">Customer Details</div>
                                </a>
                                <ul class="menu-sub">
                                  <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                                      <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                      <div data-i18n="Overview">Overview</div>
                                    </a>
                                  </li>
                                  <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                                      <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                      <div data-i18n="Security">Security</div>
                                    </a>
                                  </li>
                                  <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                                      <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                      <div data-i18n="Address & Billing">Address & Billing</div>
                                    </a>
                                  </li>
                                  <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                                      <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                      <div data-i18n="Notifications">Notifications</div>
                                    </a>
                                  </li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Manage reviews">Manage reviews</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-ecommerce-referral.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Referrals">Referrals</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Settings">Settings</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-detail.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Store details">Store details</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-payments.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Payments">Payments</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Checkout">Checkout</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Shipping & delivery">Shipping & delivery</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-locations.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Locations">Locations</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Notifications">Notifications</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
                          <div data-i18n="Academy">Academy</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-academy-dashboard.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Dashboard">Dashboard</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-academy-course.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="My Course">My Course</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-academy-course-details.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Course Details">Course Details</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-truck-outline"></i>
                          <div data-i18n="Logistics">Logistics</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-logistics-dashboard.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Dashboard">Dashboard</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-logistics-fleet.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Fleet">Fleet</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
                          <div data-i18n="Invoice">Invoice</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-invoice-list.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="List">List</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-invoice-preview.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Preview">Preview</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-invoice-edit.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Edit">Edit</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-invoice-add.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Add">Add</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
                          <div data-i18n="Users">Users</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-user-list.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="List">List</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="View">View</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="app-user-view-account.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Account">Account</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-user-view-security.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Security">Security</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-user-view-billing.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Billing & Plans">Billing & Plans</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-user-view-notifications.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Notifications">Notifications</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="app-user-view-connections.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Connections">Connections</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-shield-outline"></i>
                          <div data-i18n="Roles & Permissions">Roles & Permission</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="app-access-roles.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Roles">Roles</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="app-access-permission.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Permission">Permission</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Pages -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
                      <div data-i18n="Pages">Pages</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
                          <div data-i18n="Front Pages">Front Pages</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="../front-pages/landing-page.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Landing">Landing</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="../front-pages/pricing-page.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Pricing">Pricing</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="../front-pages/payment-page.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Payment">Payment</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="../front-pages/checkout-page.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Checkout">Checkout</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="../front-pages/help-center-landing.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Help Center">Help Center</div>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-card-account-details-outline"></i>
                          <div data-i18n="User Profile">User Profile</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="pages-profile-user.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Profile">Profile</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-profile-teams.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Teams">Teams</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-profile-projects.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Projects">Projects</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-profile-connections.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Connections">Connections</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-account-cog-outline"></i>
                          <div data-i18n="Account Settings">Account Settings</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="pages-account-settings-account.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Account">Account</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-account-settings-security.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Security">Security</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-account-settings-billing.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Billing & Plans">Billing & Plans</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-account-settings-notifications.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Notifications">Notifications</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-account-settings-connections.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Connections">Connections</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="pages-faq.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-frequently-asked-questions"></i>
                          <div data-i18n="FAQ">FAQ</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="pages-pricing.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-currency-usd"></i>
                          <div data-i18n="Pricing">Pricing</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-file-outline"></i>
                          <div data-i18n="Misc">Misc</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="pages-misc-error.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Error">Error</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Under Maintenance">Under Maintenance</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Coming Soon">Coming Soon</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Not Authorized">Not Authorized</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="pages-misc-server-error.html" class="menu-link" target="_blank">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Server Error">Server Error</div>
                            </a>
                          </li>
                        </ul>
                      </li>

                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-lock-outline"></i>
                          <div data-i18n="Authentications">Authentications</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Login">Login</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-login-cover.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Register">Register</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-register-cover.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Multi-steps">Multi-steps</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Verify Email">Verify Email</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Reset Password">Reset Password</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Forgot Password">Forgot Password</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Two Steps">Two Steps</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Cover">Cover</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-transit-connection-horizontal"></i>
                          <div data-i18n="Wizard Examples">Wizard Examples</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="wizard-ex-checkout.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Checkout">Checkout</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="wizard-ex-property-listing.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Property Listing">Property Listing</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="wizard-ex-create-deal.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Create Deal">Create Deal</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="modal-examples.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-vector-arrange-below"></i>
                          <div data-i18n="Modal Examples">Modal Examples</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Components -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-layers-outline"></i>
                      <div data-i18n="Components">Components</div>
                    </a>
                    <ul class="menu-sub">
                      <!-- Cards -->
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-credit-card-outline"></i>
                          <div data-i18n="Cards">Cards</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="cards-basic.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Basic">Basic</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-advance.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Advance">Advance</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-statistics.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Statistics">Statistics</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-analytics.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Analytics">Analytics</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-gamifications.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Gamifications">Gamifications</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="cards-actions.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Actions">Actions</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- User interface -->
                      <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-palette-swatch-outline"></i>
                          <div data-i18n="User interface">User interface</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="ui-accordion.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Accordion">Accordion</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-alerts.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Alerts">Alerts</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-badges.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Badges">Badges</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-buttons.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Buttons">Buttons</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-carousel.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Carousel">Carousel</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-collapse.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Collapse">Collapse</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-dropdowns.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Dropdowns">Dropdowns</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-footer.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Footer">Footer</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-list-groups.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="List groups">List groups</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-modals.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Modals">Modals</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-navbar.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Navbar">Navbar</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-offcanvas.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Offcanvas">Offcanvas</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Pagination & Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-progress.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Progress">Progress</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-spinners.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Spinners">Spinners</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-tabs-pills.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Tabs & Pills">Tabs &amp; Pills</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-toasts.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Toasts">Toasts</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-tooltips-popovers.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Tooltips & popovers">Tooltips &amp; popovers</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="ui-typography.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Typography">Typography</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <!-- Extended components -->
                      <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-star-outline"></i>
                          <div data-i18n="Extended UI">Extended UI</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="extended-ui-avatar.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Avatar">Avatar</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-blockui.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="BlockUI">BlockUI</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-drag-and-drop.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Drag & Drop">Drag &amp; Drop</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-media-player.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Media Player">Media Player</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Perfect scrollbar">Perfect scrollbar</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-star-ratings.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Star Ratings">Star Ratings</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-sweetalert2.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="SweetAlert2">SweetAlert2</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-text-divider.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Text Divider">Text Divider</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Timeline">Timeline</div>
                            </a>
                            <ul class="menu-sub">
                              <li class="menu-item">
                                <a href="extended-ui-timeline-basic.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Basic">Basic</div>
                                </a>
                              </li>
                              <li class="menu-item">
                                <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                                  <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                                  <div data-i18n="Fullscreen">Fullscreen</div>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-tour.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Tour">Tour</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-treeview.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Treeview">Treeview</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="extended-ui-misc.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Miscellaneous">Miscellaneous</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="icons-mdi.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-google-circles-extended"></i>
                          <div data-i18n="Icons">Icons</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Forms -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-checkbox-marked-outline"></i>
                      <div data-i18n="Forms">Forms</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                          <div data-i18n="Form Elements">Form Elements</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="forms-basic-inputs.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Basic Inputs">Basic Inputs</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-input-groups.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Input groups">Input groups</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-custom-options.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Custom Options">Custom Options</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-editors.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Editors">Editors</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-file-upload.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="File Upload">File Upload</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-pickers.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Pickers">Pickers</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-selects.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Select & Tags">Select &amp; Tags</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-sliders.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Sliders">Sliders</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-switches.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Switches">Switches</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="forms-extras.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Extras">Extras</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                          <div data-i18n="Form Layouts">Form Layouts</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="form-layouts-vertical.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Vertical Form">Vertical Form</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="form-layouts-horizontal.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Horizontal Form">Horizontal Form</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="form-layouts-sticky.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Sticky Actions">Sticky Actions</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-transit-connection-horizontal"></i>
                          <div data-i18n="Form Wizard">Form Wizard</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="form-wizard-numbered.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Numbered">Numbered</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="form-wizard-icons.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Icons">Icons</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="form-validation.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                          <div data-i18n="Form Validation">Form Validation</div>
                        </a>
                      </li>
                    </ul>
                  </li>

                  <!-- Tables -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-table"></i>
                      <div data-i18n="Tables">Tables</div>
                    </a>
                    <ul class="menu-sub">
                      <!-- Tables -->
                      <li class="menu-item">
                        <a href="tables-basic.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-grid-large"></i>
                          <div data-i18n="Tables">Tables</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-grid"></i>
                          <div data-i18n="Datatables">Datatables</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="tables-datatables-basic.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Basic">Basic</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="tables-datatables-advanced.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Advanced">Advanced</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="tables-datatables-extensions.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Extensions">Extensions</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <!-- Charts & Maps -->
                  <li class="menu-item">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons mdi mdi-chart-donut"></i>
                      <div data-i18n="Charts & Maps">Charts & Maps</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                          <i class="menu-icon tf-icons mdi mdi-chart-line"></i>
                          <div data-i18n="Charts">Charts</div>
                        </a>
                        <ul class="menu-sub">
                          <li class="menu-item">
                            <a href="charts-apex.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="Apex Charts">Apex Charts</div>
                            </a>
                          </li>
                          <li class="menu-item">
                            <a href="charts-chartjs.html" class="menu-link">
                              <i class="menu-icon tf-icons mdi mdi-circle-medium"></i>
                              <div data-i18n="ChartJS">ChartJS</div>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="menu-item">
                        <a href="maps-leaflet.html" class="menu-link">
                          <i class="menu-icon tf-icons mdi mdi-map-outline"></i>
                          <div data-i18n="Leaflet Maps">Leaflet Maps</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </aside>
            <!-- / Menu -->

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4">
                <!-- Gamification Card -->
                <div class="col-md-12 col-lg-8">
                  <div class="card h-100">
                    <div class="d-flex align-items-end row">
                      <div class="col-md-6 order-2 order-md-1">
                        <div class="card-body">
                          <h4 class="card-title pb-xl-2">Congratulations John!🎉</h4>
                          <p class="mb-0">You have done <span class="h6 mb-0">68%</span>😎 more sales today.</p>
                          <p>Check your new badge in your profile.</p>
                          <a href="javascript:;" class="btn btn-primary">View Profile</a>
                        </div>
                      </div>
                      <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                        <div class="card-body pb-0 px-0 px-md-4 ps-0">
                          <img
                            src="../../assets/img/illustrations/illustration-john-light.png"
                            height="180"
                            alt="View Profile"
                            data-app-light-img="illustrations/illustration-john-light.png"
                            data-app-dark-img="illustrations/illustration-john-dark.png" />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Gamification Card -->

                <!-- Statistics Total Order -->
                <div class="col-lg-2 col-sm-6">
                  <div class="card h-100">
                    <div class="card-body">
                      <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                        <div class="avatar">
                          <div class="avatar-initial bg-label-primary rounded">
                            <i class="mdi mdi-cart-plus mdi-24px"></i>
                          </div>
                        </div>
                        <div class="d-flex align-items-center">
                          <p class="mb-0 text-success me-1">+22%</p>
                          <i class="mdi mdi-chevron-up text-success"></i>
                        </div>
                      </div>
                      <div class="card-info mt-4 pt-1 mt-lg-1 mt-xl-4">
                        <h5 class="mb-2">155k</h5>
                        <p class="mb-lg-2 mb-xl-3">Total Orders</p>
                        <div class="badge bg-label-secondary rounded-pill">Last 4 Month</div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Statistics Total Order -->

                <!-- Sessions line chart -->
                <div class="col-lg-2 col-sm-6">
                  <div class="card h-100">
                    <div class="card-header pb-0">
                      <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                        <h4 class="mb-0 me-2">$38.5k</h4>
                        <p class="mb-0 text-success">+62%</p>
                      </div>
                      <span class="d-block mb-2 text-body">Sessions</span>
                    </div>
                    <div class="card-body pt-0">
                      <div id="sessions"></div>
                    </div>
                  </div>
                </div>
                <!--/ Sessions line chart -->

                <!-- Total Transactions & Report Chart -->
                <div class="col-12 col-xl-8">
                  <div class="card h-100">
                    <div class="row">
                      <div class="col-md-7 col-12 order-2 order-md-0">
                        <div class="card-header">
                          <h5 class="mb-0">Total Transactions</h5>
                        </div>
                        <div class="card-body">
                          <div id="totalTransactionChart"></div>
                        </div>
                      </div>
                      <div class="col-md-5 col-12 border-start">
                        <div class="card-header">
                          <div class="d-flex justify-content-between">
                            <h5 class="mb-1">Report</h5>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="totalTransaction"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical mdi-24px"></i>
                              </button>
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalTransaction">
                                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                                <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                              </div>
                            </div>
                          </div>
                          <p class="mb-0 text-body">Last month transactions $234.40k</p>
                        </div>
                        <div class="card-body pt-3">
                          <div class="row">
                            <div class="col-6 border-end">
                              <div class="d-flex flex-column align-items-center">
                                <div class="avatar">
                                  <div class="avatar-initial bg-label-success rounded">
                                    <div class="mdi mdi-trending-up mdi-24px"></div>
                                  </div>
                                </div>
                                <p class="my-2">This Week</p>
                                <h6 class="mb-0">+82.45%</h6>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="d-flex flex-column align-items-center">
                                <div class="avatar">
                                  <div class="avatar-initial bg-label-primary rounded">
                                    <div class="mdi mdi-trending-down mdi-24px"></div>
                                  </div>
                                </div>
                                <p class="my-2">This Week</p>
                                <h6 class="mb-0">-24.86%</h6>
                              </div>
                            </div>
                          </div>
                          <hr class="my-4" />
                          <div class="d-flex justify-content-around flex-wrap gap-2">
                            <div>
                              <p class="mb-1">Performance</p>
                              <h6 class="mb-0">+94.15%</h6>
                            </div>
                            <div>
                              <button class="btn btn-primary" type="button">view report</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Transactions & Report Chart -->

                <!-- Performance Chart -->
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-header pb-1">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Performance</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="performanceDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="performanceDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pb-0 pt-1">
                      <div id="performanceChart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Performance Chart -->

                <!-- Project Statistics -->
                <div class="col-md-6 col-xl-4">
                  <div class="card h-100">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="card-title m-0 me-2">Project Statistics</h5>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="projectStatus"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="projectStatus">
                          <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                          <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between py-2 px-4 border-bottom">
                      <h6 class="mb-0 small">NAME</h6>
                      <h6 class="mb-0 small">BUDGET</h6>
                    </div>
                    <div class="card-body">
                      <ul class="p-0 m-0">
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="../../assets/img/icons/misc/3d-illustration.png" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">3D Illustration</h6>
                              <small>Blender Illustration</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$6,500</div>
                          </div>
                        </li>
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="../../assets/img/icons/misc/finance-app-design.png" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Finance App Design</h6>
                              <small>Figma UI Kit</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$4,290</div>
                          </div>
                        </li>
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="../../assets/img/icons/misc/4-square.png" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">4 Square</h6>
                              <small>Android Application</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$44,500</div>
                          </div>
                        </li>
                        <li class="d-flex mb-4">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="../../assets/img/icons/misc/delta-web-app.png" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">Delta Web App</h6>
                              <small>React Dashboard</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$12,690</div>
                          </div>
                        </li>
                        <li class="d-flex">
                          <div class="avatar avatar-md flex-shrink-0 me-3">
                            <div class="avatar-initial bg-lighter rounded">
                              <div>
                                <img src="../../assets/img/icons/misc/ecommerce-website.png" alt="User" class="h-25" />
                              </div>
                            </div>
                          </div>
                          <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                            <div class="me-2">
                              <h6 class="mb-0">eCommerce Website</h6>
                              <small>Vue + Laravel</small>
                            </div>
                            <div class="badge bg-label-primary rounded-pill">$10,850</div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Project Statistics -->

                <!-- Multiple widgets -->
                <div class="col-md-6 col-xl-4">
                  <div class="row g-4">
                    <!-- Total Revenue chart -->
                    <div class="col-md-6 col-sm-6">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                            <h4 class="mb-0 me-2">$42.5k</h4>
                            <p class="mb-0 text-danger">-22%</p>
                          </div>
                          <span class="d-block mb-2 text-body">Total Revenue</span>
                        </div>
                        <div class="card-body">
                          <div id="totalRevenue"></div>
                        </div>
                      </div>
                    </div>
                    <!--/ Total Revenue chart -->

                    <div class="col-md-6 col-sm-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                              <div class="avatar-initial bg-label-success rounded">
                                <i class="mdi mdi-currency-usd mdi-24px"></i>
                              </div>
                            </div>
                            <div class="d-flex align-items-center">
                              <p class="mb-0 text-success me-1">+38%</p>
                              <i class="mdi mdi-chevron-up text-success"></i>
                            </div>
                          </div>
                          <div class="card-info mt-4 pt-3">
                            <h5 class="mb-2">$13.4k</h5>
                            <p class="text-body">Total Sales</p>
                            <div class="badge bg-label-secondary rounded-pill mt-1">Last Six Month</div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div class="d-flex justify-content-between align-items-start flex-wrap gap-2">
                            <div class="avatar">
                              <div class="avatar-initial bg-label-info rounded">
                                <i class="mdi mdi-link mdi-24px"></i>
                              </div>
                            </div>
                            <div class="d-flex align-items-center">
                              <p class="mb-0 text-success me-1">+62%</p>
                              <i class="mdi mdi-chevron-up text-success"></i>
                            </div>
                          </div>
                          <div class="card-info mt-4 pt-4">
                            <h5 class="mb-2">142.8k</h5>
                            <p class="text-body">Total Impression</p>
                            <div class="badge bg-label-secondary rounded-pill">Last One Year</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- overview Radial chart -->
                    <div class="col-md-6 col-sm-6">
                      <div class="card h-100">
                        <div class="card-header pb-0">
                          <div class="d-flex align-items-end mb-1 flex-wrap gap-2">
                            <h4 class="mb-0 me-2">$67.1k</h4>
                            <p class="mb-0 text-success">+49%</p>
                          </div>
                          <span class="d-block mb-2 text-body">Overview</span>
                        </div>
                        <div class="card-body pt-0">
                          <div id="overviewChart" class="d-flex align-items-center"></div>
                        </div>
                      </div>
                    </div>
                    <!--/ overview Radial chart -->
                  </div>
                </div>
                <!--/ Multiple widgets -->

                <!-- Sales Country Chart -->
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Sales Country</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="salesCountryDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesCountryDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div>
                      </div>
                      <p class="mb-0 text-body">Total $42,580 Sales</p>
                    </div>
                    <div class="card-body pb-1 px-0">
                      <div id="salesCountryChart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Sales Country Chart -->

                <!-- Top Referral Source  -->
                <div class="col-12 col-xl-8">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title m-0">
                        <h5 class="mb-1">Top Referral Sources</h5>
                        <p class="text-body mb-0">82% Activity Growth</p>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="earningReportsTabsId"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="mdi mdi-dots-vertical mdi-24px"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="earningReportsTabsId">
                          <a class="dropdown-item" href="javascript:void(0);">View More</a>
                          <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pb-3">
                      <ul class="nav nav-tabs nav-tabs-widget pb-3 gap-4 mx-1 d-flex flex-nowrap" role="tablist">
                        <li class="nav-item">
                          <div
                            class="nav-link btn active d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-orders-id"
                            aria-controls="navs-orders-id"
                            aria-selected="true">
                            <button type="button" class="btn btn-icon rounded-pill btn-label-google-plus">
                              <i class="mdi mdi-google mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div
                            class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-sales-id"
                            aria-controls="navs-sales-id"
                            aria-selected="false">
                            <button type="button" class="btn btn-icon rounded-pill btn-label-facebook">
                              <i class="mdi mdi-facebook mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div
                            class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-profit-id"
                            aria-controls="navs-profit-id"
                            aria-selected="false">
                            <button type="button" class="btn btn-icon rounded-pill btn-label-instagram">
                              <i class="mdi mdi-instagram mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div
                            class="nav-link btn d-flex flex-column align-items-center justify-content-center"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-income-id"
                            aria-controls="navs-income-id"
                            aria-selected="false">
                            <button type="button" class="btn btn-icon rounded-pill btn-label-twitter">
                              <i class="mdi mdi-twitter mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                        <li class="nav-item">
                          <div
                            class="nav-link btn d-flex align-items-center justify-content-center disabled"
                            role="tab"
                            data-bs-toggle="tab"
                            aria-selected="false">
                            <button type="button" class="btn btn-icon rounded bg-label-secondary">
                              <i class="mdi mdi-plus mdi-20px"></i>
                            </button>
                          </div>
                        </li>
                      </ul>
                      <div class="tab-content p-0 ms-0 ms-sm-2">
                        <div class="tab-pane fade show active" id="navs-orders-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead class="border-bottom">
                                <tr>
                                  <th class="fw-medium ps-0 text-heading">Parameter</th>
                                  <th class="pe-0 fw-medium text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-heading">Conversion</th>
                                  <th class="pe-0 text-end text-heading">total revenue</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="h6 ps-0">Email Marketing Campaign</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="pe-0 text-success">+24%</td>
                                  <td class="pe-0 text-end h6">$42,857</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Google Workspace</td>
                                  <td class="pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                  </td>
                                  <td class="text-danger pe-0">-12%</td>
                                  <td class="pe-0 text-end h6">$850</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Affiliation Program</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-success pe-0">+24%</td>
                                  <td class="pe-0 text-end h6">$5,576</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Google Adsense</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                  <td class="text-success pe-0">0%</td>
                                  <td class="pe-0 text-end h6">$0</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-sales-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead class="border-bottom">
                                <tr>
                                  <th class="fw-medium ps-0 text-heading">parameter</th>
                                  <th class="pe-0 fw-medium text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-heading">Conversion</th>
                                  <th class="pe-0 text-end text-heading">total revenue</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="h6 ps-0">Create Audiences in Ads Manager</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="pe-0 text-danger">-8%</td>
                                  <td class="pe-0 text-end h6">$322</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Facebook page advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-success pe-0">+19%</td>
                                  <td class="pe-0 text-end h6">$5,634</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Messenger advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-danger">Expired</span></td>
                                  <td class="text-danger pe-0">-23%</td>
                                  <td class="pe-0 text-end h6">$751</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Video campaign</td>
                                  <td class="pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                  </td>
                                  <td class="text-success pe-0">+21%</td>
                                  <td class="pe-0 text-end h6">$3,585</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-profit-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead class="border-bottom">
                                <tr>
                                  <th class="fw-medium ps-0 text-heading">parameter</th>
                                  <th class="pe-0 fw-medium text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-heading">Conversion</th>
                                  <th class="pe-0 text-end text-heading">total revenue</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="h6 ps-0">Create shopping advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                  <td class="pe-0 text-danger">-15%</td>
                                  <td class="pe-0 text-end h6">$599</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">IGTV advertising</td>
                                  <td class="pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                  </td>
                                  <td class="text-success pe-0">+37%</td>
                                  <td class="pe-0 text-end h6">$1,467</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Collection advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-info">In Draft</span></td>
                                  <td class="text-danger pe-0">0%</td>
                                  <td class="pe-0 text-end h6">$0</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Stories advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-success pe-0">+29%</td>
                                  <td class="pe-0 text-end h6">$4,546</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="navs-income-id" role="tabpanel">
                          <div class="table-responsive text-nowrap">
                            <table class="table table-borderless">
                              <thead class="border-bottom">
                                <tr>
                                  <th class="fw-medium ps-0 text-heading">Parameter</th>
                                  <th class="pe-0 fw-medium text-heading">Status</th>
                                  <th class="pe-0 fw-medium text-heading">Conversion</th>
                                  <th class="pe-0 text-end text-heading">total revenue</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="h6 ps-0">Interests advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-danger">Expired</span></td>
                                  <td class="pe-0 text-success">+2%</td>
                                  <td class="pe-0 text-end h6">$404</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Community advertising</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-success pe-0">+25%</td>
                                  <td class="pe-0 text-end h6">$399</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Device advertising</td>
                                  <td class="pe-0">
                                    <span class="badge rounded-pill bg-label-warning">Completed</span>
                                  </td>
                                  <td class="text-success pe-0">+21%</td>
                                  <td class="pe-0 text-end h6">$177</td>
                                </tr>
                                <tr>
                                  <td class="h6 ps-0">Campaigning</td>
                                  <td class="pe-0"><span class="badge rounded-pill bg-label-primary">Active</span></td>
                                  <td class="text-danger pe-0">-5%</td>
                                  <td class="pe-0 text-end h6">$1,139</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Top Referral Source  -->

                <!-- Weekly Sales Chart-->
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Weekly Sales</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="weeklySalesDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="weeklySalesDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                          </div>
                        </div>
                      </div>
                      <p class="text-body mb-0">Total 85.4k Sales</p>
                    </div>
                    <div class="card-body">
                      <div class="row mb-2">
                        <div class="col-6 d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-primary rounded">
                              <i class="mdi mdi-trending-up mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <small class="text-body mb-1">Net Income</small>
                            <h6 class="mb-0">$438.5K</h6>
                          </div>
                        </div>
                        <div class="col-6 d-flex align-items-center">
                          <div class="avatar">
                            <div class="avatar-initial bg-label-warning rounded">
                              <i class="mdi mdi-currency-usd mdi-24px"></i>
                            </div>
                          </div>
                          <div class="ms-3 d-flex flex-column">
                            <small class="text-body mb-1">Expense</small>
                            <h6 class="mb-0">$22.4K</h6>
                          </div>
                        </div>
                      </div>
                      <div id="weeklySalesChart"></div>
                    </div>
                  </div>
                </div>
                <!--/ Weekly Sales Chart-->

                <!-- visits By Day Chart-->
                <div class="col-12 col-xl-4 col-md-6">
                  <div class="card h-100">
                    <div class="card-header pb-1">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Visits by Day</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="visitsByDayDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitsByDayDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                            <a class="dropdown-item" href="javascript:void(0);">Update</a>
                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                          </div>
                        </div>
                      </div>
                      <p class="mb-0 text-body">Total 248.5k Visits</p>
                    </div>
                    <div class="card-body pt-0">
                      <div id="visitsByDayChart"></div>
                      <div class="d-flex justify-content-between mt-3">
                        <div>
                          <h6 class="mb-1">Most Visited Day</h6>
                          <p class="mb-0">Total 62.4k Visits on Thursday</p>
                        </div>
                        <div class="avatar">
                          <div class="avatar-initial bg-label-warning rounded">
                            <i class="mdi mdi-chevron-right mdi-24px scaleX-n1-rtl"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ visits By Day Chart-->

                <!-- Activity Timeline -->
                <div class="col-12 col-xl-8">
                  <div class="card h-100">
                    <div class="card-header">
                      <div class="d-flex justify-content-between">
                        <h5 class="mb-1">Activity Timeline</h5>
                        <div class="dropdown">
                          <button
                            class="btn p-0"
                            type="button"
                            id="timelineDropdown"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical mdi-24px"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timelineDropdown">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-4 pb-1">
                      <ul class="timeline card-timeline mb-0">
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-primary"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-2">Create youtube video for next product 😎</h6>
                              <small class="text-muted">Tomorrow</small>
                            </div>
                            <p class="mb-2">Product introduction and details video</p>
                            <div class="d-flex">
                              <a href="https://www.youtube.com/@pixinvent1515" target="_blank" class="text-truncate">
                                <span class="badge badge-center rounded-pill bg-danger w-px-20 h-px-20 me-2">
                                  <i class="mdi mdi-play text-white"></i>
                                </span>
                                <span class="fw-medium">https://www.youtube.com/@pixinvent1515</span>
                              </a>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span class="timeline-point timeline-point-info"></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-2">Received payment from usa client 😍</h6>
                              <small class="text-muted">January, 18</small>
                            </div>
                            <p class="mb-2">Received payment $1,490 for banking ios app</p>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent border-transparent">
                          <span class="timeline-point timeline-point-warning"></span>
                          <div class="timeline-event pb-1">
                            <div class="timeline-header mb-1">
                              <h6 class="mb-2">Meeting with joseph morgan for next project</h6>
                              <small class="text-muted">April, 23</small>
                            </div>
                            <p class="mb-2">Meeting Video call on zoom at 9pm</p>
                            <div class="d-flex">
                              <a href="javascript:void(0)" class="me-3">
                                <img
                                  src="../../assets/img/icons/misc/pdf.png"
                                  alt="PDF image"
                                  width="20"
                                  class="me-2" />
                                <span class="fw-medium">presentation.pdf</span>
                              </a>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- Activity Timeline -->
              </div>
            </div>
            <!--/ Content -->

            <!-- Footer -->
            @include('admin.partials.footer')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
</x-app-layout>
