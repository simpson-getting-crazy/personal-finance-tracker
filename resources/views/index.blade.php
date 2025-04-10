@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between mb-9">
                        <div class="mb-9 mb-md-0">
                            <h5 class="card-title">Latest reviews</h5>
                            <p class="card-subtitle mb-0">Reviewd received across all channels</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <form class="position-relative me-3 w-100">
                                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
                                    placeholder="Search">
                                <i
                                    class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                            </form>
                            <div class="dropdown">
                                <a href="#" class="btn border shadow-none px-3" id="dropdownMenuButton"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-dots-vertical fs-5"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                                class="fs-4 ti ti-plus"></i>Add</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                                class="fs-4 ti ti-edit"></i>Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item d-flex align-items-center gap-3" href="#"><i
                                                class="fs-4 ti ti-trash"></i>Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive overflow-x-auto latest-reviews-table">
                        <table class="table mb-0 align-middle text-nowrap">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="ps-0">
                                        #
                                    </th>
                                    <th>Products</th>
                                    <th>Customer</th>
                                    <th>Reviews</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-0">
                                        <div class="form-check mb-0 flex-shrink-0">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center product text-truncate">
                                            <img src="../assets/images/products/product-5.png"
                                                class="img-fluid flex-shrink-0" width="60" height="60">
                                            <div class="ms-3 product-title">
                                                <h6 class="fs-4 mb-0 text-truncate-2">iPhone 13 pro
                                                    max-Pacific Blue-128GB storage</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center text-truncate">
                                            <img src="../assets/images/profile/user-2.jpg" alt=""
                                                class="img-fluid rounded-circle flex-shrink-0" width="32"
                                                height="32">
                                            <div class="ms-7">
                                                <h5 class="mb-1 fs-4">Arlene McCoy</h5>
                                                <h6 class="mb-0 fw-light">macoy@arlene.com</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-reviews">
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-line-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                            </ul>
                                            <p class="text-dark mb-0 fw-normal text-truncate-2">
                                                This theme is great. Clean and easy to
                                                understand. Perfect for those who don't have<br>
                                                time to... <a href="#">See more</a>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                                    </td>
                                    <td>
                                        <p class="mb-0">Nov 8</p>
                                    </td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted " id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="form-check mb-0 flex-shrink-0">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault2">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center product text-truncate">
                                            <img src="../assets/images/products/product-6.png"
                                                class="img-fluid flex-shrink-0" width="60" height="60">
                                            <div class="ms-3 product-title">
                                                <h6 class="fs-4 mb-0 text-truncate-2">Apple MacBook
                                                    Pro 13 inch-M1-8/256GB-space</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center text-truncate">
                                            <img src="../assets/images/profile/user-3.jpg" alt=""
                                                class="img-fluid rounded-circle flex-shrink-0" width="32"
                                                height="32">
                                            <div class="ms-7">
                                                <h5 class="mb-1 fs-4">Jerome Bell</h5>
                                                <h6 class="mb-0 fw-light">belljerome@yahoo.com</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-reviews">
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-line-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                            </ul>
                                            <p class="text-dark mb-0 fw-normal text-truncate-2">
                                                It's a Mac, after all. Once you've gone Mac,there's no
                                                going back. My first Mac
                                                lastedover nine years.
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                                    </td>
                                    <td>
                                        <p class="mb-0">Nov 8</p>
                                    </td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted " id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="form-check mb-0 flex-shrink-0">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault3">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center product text-truncate">
                                            <img src="../assets/images/products/product-7.png"
                                                class="img-fluid flex-shrink-0" width="60" height="60">
                                            <div class="ms-3 product-title">
                                                <h6 class="fs-4 mb-0 text-truncate-2">PlayStation 5
                                                    DualSense Wireless Controller</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center text-truncate">
                                            <img src="../assets/images/profile/user-4.jpg" alt=""
                                                class="img-fluid rounded-circle flex-shrink-0" width="32"
                                                height="32">
                                            <div class="ms-7">
                                                <h5 class="mb-1 fs-4">Jacob Jones</h5>
                                                <h6 class="mb-0 fw-light">jones009@hotmail.com</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-reviews">
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-line-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                            </ul>
                                            <p class="text-dark mb-0 fw-normal text-truncate-2">
                                                The best experience we could hope for.Customer service
                                                team is amazing and thequality
                                                of their products... <a href="#">See more</a>
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                                    </td>
                                    <td>
                                        <p class="mb-0">Nov 8</p>
                                    </td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted " id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="form-check mb-0 flex-shrink-0">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault4">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center product text-truncate">
                                            <img src="../assets/images/products/product-8.png"
                                                class="img-fluid flex-shrink-0" width="60" height="60">
                                            <div class="ms-3 product-title">
                                                <h6 class="fs-4 mb-0 text-truncate-2">Amazon Basics
                                                    Mesh, Mid-Back, Swivel Office De...
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center text-truncate">
                                            <img src="../assets/images/profile/user-5.jpg" alt=""
                                                class="img-fluid rounded-circle flex-shrink-0" width="32"
                                                height="32">
                                            <div class="ms-7">
                                                <h5 class="mb-1 fs-4">Annette Black</h5>
                                                <h6 class="mb-0 fw-light">blackanne@yahoo.com</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-reviews">
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-line-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                            </ul>
                                            <p class="text-dark mb-0 fw-normal text-truncate-2">
                                                The controller is quite comfy for me. Despiteits
                                                increased size, the controller still
                                                fits well <br>in my hands.
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="badge rounded-pill bg-success-subtle text-success border-success border">Confirmed</span>
                                    </td>
                                    <td>
                                        <p class="mb-0">Nov 8</p>
                                    </td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted " id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-0">
                                        <div class="form-check mb-0 flex-shrink-0">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault5">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center product text-truncate">
                                            <img src="../assets/images/products/product-9.png"
                                                class="img-fluid flex-shrink-0" width="60" height="60">
                                            <div class="ms-3 product-title">
                                                <h6 class="fs-4 mb-0 text-truncate-2">Sony X85J 75
                                                    Inch Sony 4K Ultra HD LED Smart G...
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center text-truncate">
                                            <img src="../assets/images/profile/user-6.jpg" alt=""
                                                class="img-fluid rounded-circle flex-shrink-0" width="32"
                                                height="32">
                                            <div class="ms-7">
                                                <h5 class="mb-1 fs-4">Albert Flores</h5>
                                                <h6 class="mb-0 fw-light">albertflo9@gmail.com</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="product-reviews">
                                            <ul class="list-unstyled d-flex align-items-center mb-0">
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="me-1 " href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-bold-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                                <li><a class="" href="javascript:void(0)"><iconify-icon
                                                            icon="solar:star-line-duotone"
                                                            class="text-warning"></iconify-icon></a>
                                                </li>
                                            </ul>
                                            <p class="text-dark mb-0 fw-normal text-truncate-2">
                                                This theme is great. Perfect for those whodon't have
                                                time to start everything from
                                                <br>scratch.
                                            </p>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="badge rounded-pill bg-warning-subtle text-warning border-warning border">Pending</span>
                                    </td>
                                    <td>
                                        <p class="mb-0">Nov 8</p>
                                    </td>
                                    <td>
                                        <div class="dropdown dropstart">
                                            <a href="#" class="text-muted " id="dropdownMenuButton"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti ti-dots-vertical fs-5"></i>
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-plus"></i>Add</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-edit"></i>Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item d-flex align-items-center gap-3"
                                                        href="#"><i class="fs-4 ti ti-trash"></i>Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-10">
                        <p class="mb-0 fw-normal">1-6 of 32</p>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0 align-items-center">
                                <li class="page-item"><a
                                        class="page-link border-0 d-flex align-items-center text-muted fw-normal"
                                        href="#"><iconify-icon icon="solar:alt-arrow-left-line-duotone"
                                            class="fs-5"></iconify-icon>Previous</a></li>
                                <li class="page-item"><a class="page-link border-0 d-flex align-items-center fw-normal"
                                        href="#">Next<iconify-icon icon="solar:alt-arrow-right-line-duotone"
                                            class="fs-5"></iconify-icon></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
