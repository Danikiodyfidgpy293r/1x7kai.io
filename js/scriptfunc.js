 let totalPrice = 0;

        function addToList(serviceName, servicePrice) {
            const selectedServices = document.getElementById('selectedServices');

            // Add service to the list
            const listItem = document.createElement('li');
            listItem.textContent = `${serviceName} - ${servicePrice}`;
            selectedServices.appendChild(listItem);

            // Update total price
            totalPrice += servicePrice;
            document.getElementById('totalPrice').textContent = totalPrice;

            localStorage.setItem('totalPrice', totalPrice);
        }