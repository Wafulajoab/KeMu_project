let visitorsCount = 0;

function signIn() {
    const visitorName = document.getElementById("visitorName").value;
    const visitorID = document.getElementById("visitorID").value;
    const phoneNumber = document.getElementById("phoneNumber").value;
    const purpose = document.getElementById("purpose").value;

    // Check if ID and phone number are required and contain only digits
    const digitsOnlyRegex = /^\d+$/;
    if (!visitorID.match(digitsOnlyRegex) || !phoneNumber.match(digitsOnlyRegex)) {
        alert("ID and phone number should contain only digits.");
        return;
    }

    // Check if any field is empty
    if (!visitorName || !visitorID || !phoneNumber || !purpose) {
        alert("Please fill in all fields before signing in.");
        return;
    }

    const signInTime = new Date().toLocaleString();

    const table = document.getElementById("visitorTable");
    const row = table.insertRow(1);
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    const cell3 = row.insertCell(2);
    const cell4 = row.insertCell(3);
    const cell5 = row.insertCell(4);
    const cell6 = row.insertCell(5);

    visitorsCount++;
    cell1.innerHTML = visitorsCount;
    cell2.innerHTML = visitorName;
    cell3.innerHTML = visitorID;
    cell4.innerHTML = phoneNumber;
    cell5.innerHTML = purpose;
    cell6.innerHTML = signInTime;

    document.getElementById("visitorForm").reset();
}

function printVisitorRecords() {
    const table = document.getElementById("visitorTable").cloneNode(true); // Clone the table
    const rows = Array.from(table.getElementsByTagName("tr"));

    // Remove columns other than the ones containing details
    rows.forEach(row => {
        const cells = Array.from(row.getElementsByTagName("td"));
        for (let j = cells.length - 1; j > 0; j--) {
            if (![1, 2, 3, 4, 5].includes(j)) {
                row.deleteCell(j);
            }
        }
    });

    // Reverse the order of rows
    const reversedRows = rows.reverse();

    const printWindow = window.open("", "_blank");
    printWindow.document.write('<html><head><title>Visitor Records</title></head><body>');
    printWindow.document.write('<h2>Visitor Records</h2>');
    printWindow.document.write('<table border="1">');

    // Add header row
    printWindow.document.write(reversedRows[0].outerHTML);

    // Add visitor rows
    for (let i = 1; i < reversedRows.length; i++) {
        printWindow.document.write(reversedRows[i].outerHTML);
    }

    printWindow.document.write('</table>');
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
}
