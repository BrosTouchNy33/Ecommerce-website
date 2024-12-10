const newProducts = [
    {
      id: 11,
      image: "image/product-thumb-11.jpg",
      title: "Amber Jar",
      description: "Honey best nectar you wish to get"
    },
    {
      id: 12,
      image: "image/product-thumb-12.jpg",
      title: "Amber Jar",
      description: "Honey best nectar you wish to get"
    },
    {
      id: 13,
      image: "image/product-thumb-13.jpg",
      title: "Amber Jar",
      description: "Honey best nectar you wish to get"
    },
    {
      id: 14,
      image: "image/product-thumb-14.jpg",
      title: "Amber Jar",
      description: "Honey best nectar you wish to get"
    }
  ];
  const bestSellingProducts = [
    {
        id: 11,
        image: "image/product-thumb-11.jpg",
        subImages:[
            {'img':'image/product-thumb-11.jpg'},
            {'img':'image/product-thumb-13.jpg'},
            {'img':'image/product-thumb-14.jpg'},
            {'img':'image/product-thumb-12.jpg'},
            {'img':'image/product-thumb-3.jpg'},
        ],
        title: "Premium Honey Jar",
        description: "Honey best nectar you wish to get",
        price: 12.99
    },
    {
        id: 12,
        image: "image/product-thumb-12.jpg",
        subImages:[
            {'img':'image/product-thumb-12.jpg'},
            {'img':'image/product-thumb-13.jpg'},
            {'img':'image/product-thumb-11.jpg'},
            {'img':'image/product-thumb-14.jpg'},
            {'img':'image/product-thumb-2.jpg'},
        ],
        title: "Golden Amber Jar",
        description: "Honey best nectar you wish to get",
        price: 15.49
    },
    {
        id: 13,
        image: "image/product-thumb-13.jpg",
        subImages:[
            {'img':'image/product-thumb-13.jpg'},
            {'img':'image/product-thumb-11.jpg'},
            {'img':'image/product-thumb-12.jpg'},
            {'img':'image/product-thumb-14.jpg'},
            {'img':'image/product-thumb-2.jpg'},
        ],
        title: "Organic Honey Jar",
        description: "Honey best nectar you wish to get",
        price: 10.99
    },
    {
        id: 14,
        image: "image/product-thumb-14.jpg",
        subImages:[
            {'img':'image/product-thumb-14.jpg'},
            {'img':'image/product-thumb-12.jpg'},
            {'img':'image/product-thumb-13.jpg'},
            {'img':'image/product-thumb-11.jpg'},
            {'img':'image/product-thumb-1.jpg'},
        ],
        title: "Natural Amber Jar",
        description: "Honey best nectar you wish to get",
        price: 13.49
    },
    {
        id: 15,
        image: "image/product-thumb-1.jpg",
        subImages:[
            {'img':'image/product-thumb-1.jpg'},
            {'img':'image/product-thumb-11.jpg'},
            {'img':'image/product-thumb-13.jpg'},
            {'img':'image/product-thumb-14.jpg'},
            {'img':'image/product-thumb-12.jpg'},
        ],
        title: "Classic Honey Jar",
        description: "Honey best nectar you wish to get",
        price: 9.99
    },
    {
        id: 16,
        image: "image/product-thumb-2.jpg",
        subImages:[
            {'img':'image/product-thumb-2.jpg'},
            {'img':'image/product-thumb-13.jpg'},
            {'img':'image/product-thumb-14.jpg'},
            {'img':'image/product-thumb-12.jpg'},
            {'img':'image/product-thumb-11.jpg'},
        ],
        title: "Amber Honey Delight",
        description: "Honey best nectar you wish to get",
        price: 14.99
    },
    {
        id: 17,
        image: "image/product-thumb-3.jpg",
        subImages:[
            {'img':'image/product-thumb-3.jpg'},
            {'img':'image/product-thumb-13.jpg'},
            {'img':'image/product-thumb-14.jpg'},
            {'img':'image/product-thumb-12.jpg'},
            {'img':'image/product-thumb-11.jpg'},
        ],
        title: "Sweet Amber Jar",
        description: "Honey best nectar you wish to get",
        price: 11.49
    }
];

  
  const productList = document.querySelector('.new-products');
  const bestSellingProductList = document.querySelector('.best-selling');

  function generateNewProducts(){
    let productHtml = "";
    newProducts.forEach(e => {
        
        productHtml+=`
                    <div class="col-md-4">
                <div class="card">
                    <img src="${e.image}" class="card-img-top" alt="${e.title}">
                    <div class="card-body">
                        <h5 style="font-size: 16px;">${e.title}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text"><strong>$10.99</strong></p>
                            <!-- View Details Button, trigger modal -->
                           
                        </div>
                    </div>
                </div>
            </div>`;

    });
    productList.innerHTML = productHtml;
  }
  function generateBestSellingProducts() {
    let productHtml = "";
    bestSellingProducts.forEach((e, index) => {
        // Generate sub-images if available
        const subImages = e.subImages?.map((imgObj, subIndex) => `
            <img src="${imgObj.img}" class="img-thumbnail mb-2 sub-image" alt="Sub Image ${subIndex}" onclick="swapMainImage(${index}, '${imgObj.img}')">
        `).join("") || "";
        productHtml += `
            <div class="col-md-4">
                <div class="card">
                    <img src="${e.image}" class="card-img-top" alt="${e.title}">
                    <div class="card-body">
                        <h5 style="font-size: 16px;">${e.title}</h5>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text"><strong>$${e.price}</strong></p>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productModal${index}">View Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Product ${e.title} -->
            <div class="modal fade" id="productModal${index}" tabindex="-1" aria-labelledby="productModalLabel${index}" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel${index}">${e.title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-7">
                                    <img id="mainImage${index}" src="${e.image}" class="img-fluid mb-3" alt="${e.title}">
                                    <p><strong>Price:</strong> $${e.price}</p>
                                    <p><strong>Description:</strong> ${e.description}</p>
                                </div>
                                <div class="col-md-5 d-flex flex-row">
                                    ${subImages}
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="addToCart(${index}, document.getElementById('mainImage${index}').src)">Add to Cart</button>

                        </div>
                    </div>
                </div>
            </div>
        `;
    });
   
    bestSellingProductList.innerHTML = productHtml;
}


let cartItems = [];

function addToCart(productIndex, clickedImageUrl) {
    const product = bestSellingProducts[productIndex];
    const selectedImage = clickedImageUrl || product.image; // Use clicked image or default to the main image
    const cartItem = {
        title: product.title,
        price: product.price,
        image: selectedImage,
    };
    cartItems.push(cartItem);
    updateCartPopup();
    const cartModal = new bootstrap.Modal(document.getElementById('cartModal'));
    cartModal.show(); 
}
function toggleCartPopup() {
    const cartPopup = document.getElementById('cartPopup');
    cartPopup.classList.toggle('active'); // Show or hide the cart popup
}


function updateCartPopup() {
    const cartItemsHtml = cartItems.map((item, index) => `
        <tr>
            <td>${index + 1}</td>
            <td>${item.title}</td>
            <td>$${item.price.toFixed(2)}</td>
             <td><img src="${item.image}" alt="${item.title}" class="cart-item-image"></td>
        </tr>
    `).join("");

    document.getElementById('cartTableBody').innerHTML = cartItemsHtml;
}

function toggleCheckoutPopup() {
    const checkoutPopup = document.getElementById('checkoutPopup');
    checkoutPopup.classList.toggle('active'); // Show or hide the checkout popup
}
function showCheckoutPopup(modalId) {
   // Hide the modal using Bootstrap's modal API
   const cartModal = document.getElementById("cartModal");
   const modal = bootstrap.Modal.getInstance(cartModal);
   const productModal = document.getElementById(modalId);
    const modalXL = bootstrap.Modal.getInstance(productModal);
   if (modal) {
       modal.hide();
    //    modalXL.hide();

   }

  
    // Hide the cart detail popup
    const cartPopup = document.getElementById('cartPopup');
    if (cartPopup) {
        cartPopup.classList.remove('active'); // Remove the 'active' class to hide it
    }

    // Show the checkout popup
    updateCheckoutPopup(); // Populate checkout popup with cart items
    const checkoutPopup = document.getElementById('checkoutPopup');
    checkoutPopup.classList.add('active'); // Show the checkout popup
}





function updateCheckoutPopup() {
    // Generate table rows for cart items
    const checkoutItemsHtml = cartItems.map((item, index) => `
        <tr>
            <td>${index + 1}</td>
            <td><img src="${item.image}" alt="${item.title}" class="cart-item-image" style="width:50px; height:50px;"></td>
            <td>${item.title}</td>
            <td>$${item.price.toFixed(2)}</td>
        </tr>
    `).join("");

    // Calculate total price
    const total = cartItems.reduce((sum, item) => sum + item.price, 0);

    // Update the table body
    document.getElementById('checkoutTableBody').innerHTML = checkoutItemsHtml;

    // Update the total
    document.getElementById('checkoutTotal').innerHTML = `Total: $${total.toFixed(2)}`;
}
function proceedToPayment() {
    if (cartItems.length === 0) {
        alert("Your cart is empty. Please add items before proceeding.");
        return;
    }
    alert("Proceeding to payment...");

}


// Function to swap the main image
function swapMainImage(index, newImageUrl) {
    document.getElementById(`mainImage${index}`).src = newImageUrl ;
}


  generateNewProducts();
  generateBestSellingProducts();