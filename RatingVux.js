
// Kiểm tra thử xem phần tử thuộc thẻ này đang được chọn là gì trên trang bằng cách F12 vào phần cần xem
// Biết được class 1 phần tử, ta sẽ biết được nhiều phần tử khác cùng class như vậy để thực hiện tùy mục đích khác nhau
// Nhưng mỗi class lại là một câu trả lời riêng, vậy chúng ta sẽ thử chạy 1 vòng lặp để kiểm tra

/* var array1;
array1 = document.getElementsByClassName("txtAnswer");
for (let i = 0; i<array1.length; i++) {
    window.alert(array1[i].placeholder)
} */

// Như vậy, sẽ có câu trả lời là textarea, có câu trả lời lại là radio button
// Từ đó suy ra được số thứ tự trong mảng của phần tử và tiến hành điền sẵn giá trị thôi. Ở đây có "số_ca_học" và "ý_kiến_khác" không cần điền nếu
// bạn không nghỉ buổi học nào và không có ý kiến gì :P

document.getElementsByClassName('txtAnswer')[0].value = 'Le Hoang Vu';
document.getElementsByClassName('txtAnswer')[1].value = 'Toan Giai tich 1';
document.getElementsByClassName('txtAnswer')[2].value = 'GT1';
document.getElementsByClassName("txtAnswer")[21].value = "0";
document.getElementsByClassName("txtAnswer")[22].value = "Em không có ý kiến gì ạ";

// Đối với các radio button, chúng ta lại phải xử lý riêng. Tại đây, bạn sẽ lấy ID để xử lý
// Để kiểm tra và tìm kiếm ID nhanh, bạn có thể gán vào mảng như bên dưới, và cũng di chuột, đúp vào để tìm kiếm

/* var array2;
array2 = document.getElementsByClassName("RadioButtonListCssClass");
Đưa chuột vào các thành phần trong mảng để kiểm tra ID phần tử Radio */ 

// rad23e2b201-5b9c-4cf3-a0f6-1b99ee5b254e: yếu
// radb80daa81-96d1-400f-8732-357c39af4536: giỏi
// ...
document.getElementById("radb80daa81-96d1-400f-8732-357c39af4536").checked = true;

// rad7b966636-07f0-45ab-8f23-93b12e08fa40: Khóa 23
document.getElementById("rad7b966636-07f0-45ab-8f23-93b12e08fa40").checked = true;

// radbb554250-a539-486c-9419-aef1ce1b0a14: Khoa Hệ thống thông tin quản lý
document.getElementById("radbb554250-a539-486c-9419-aef1ce1b0a14").checked = true;

// Phần này mình cũng sử dụng tìm kiếm thẻ có chứa những radio button này giống bước trên, nhưng sẽ là theo ByTagName('div')
/* document.getElementsByTagName('div'); */
// Thì mình tìm được khu vực nội dung bảng hỏi có số thứ tự là 153. Đúp vào và tiếp đục đào sâu vào thẻ <tr>, mình đưa các name của radio button vào mảng array3
// như dưới đây để thực hiện check hàng loạt (chỗ này hơi tù)

var array3 = ['6056e32f-eebf-40ea-a7f0-8f78552cee96', '2c969b30-827d-4089-824e-0135d66a5061', 'c7b9f7f4-1c76-4da2-bf82-50e8c0df5966', '389e5133-7bc3-4259-b792-3e176a1d13f8', 
'7cdcc780-a6f8-4276-85fc-9d5e3b885658', 'a8141999-4bd8-4dae-ad8f-e738b15a72db', '1fca8823-7d66-421e-a261-1845690245cc', 'b45b7534-9e85-46d2-9aff-b4f659a74a60', 'd68c4a6f-5bc2-4fd4-bbe4-5b88f5443e84',
'34e4473a-cdd7-4196-8edc-5172a3dd9a24', '84ef10d1-3b0a-4d00-a7fa-09234715371d', 'd00202f5-1680-4760-bc08-75066bb6c0a0', '6ff10e59-3548-4d9b-8496-e616673fd057', '26a6c76e-6113-41a6-8e14-6f4def8d3f07',
'cede76ad-c56d-4de8-9c1a-83c1ffe37ff0', '770a6d66-a6b0-40a6-a32e-e52d4a4cd2a6', 'bc7d7633-5f34-4667-8837-72ffa44c5113', '31837ea1-e09a-49fe-8a3a-b80865fcfb68', '6755e42f-48d0-4262-80cd-d9e19fd5a513',
'1b30ade9-b836-4dbf-9404-16fbe1f032c0', '03b0635e-41e2-45ee-8788-107a3688e2d3']

for (let i = 0; i < array3.length; i++) {
document.getElementsByName(array3[i])[4].checked = true;
// name cũng là một mảng chứa các value, với giá trị value từ 0 đến 4 tương ứng từ "Hoàn toàn ko đồng ý" đến "Hoàn toàn đồng ý"
// Tại đây mình để tất cả "Hoàn toàn đồng ý". Mình không khuyến khích mọi người làm việc này, đánh giá như thế nào mọi người có thể chỉnh sửa sau, demo thôi! 
}
