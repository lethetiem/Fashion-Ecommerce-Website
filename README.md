# Fashion Ecommerce Websites
### Git Rule
+ Không push code lên branch master/main, chỉ được push và tạo pull request từ branch feature vào branch develop
+ Commit và push code lên github trong khoảng thời gian từ 10h sáng đến 10h tối, không nhận bất kì lần pull request nào quá khoảng thời gian này
+ 9h sáng mỗi ngày hoặc muốn code tiếp tục thì thực hiện update code trước tiên
+ Mỗi feature sẽ tạo 1 branch mới
+ Không thực hiện merge code lung tung

### Git Guide
Bước 1: Thực hiện Clone repository trên github về máy
> Git clone https://github.com/lethetiem/SaleOnlineWebDeveloper.git

Sau khi clone về, ta sẽ có những branch như sau trên máy

![image](https://user-images.githubusercontent.com/43443323/112078100-5ca8bf80-8bb0-11eb-916e-4a7fdeb5862a.png)

Bước 2: Gõ lệnh sau để kiểm tra tất cả các branch hiện có trên máy và trên GitHub(remote)

> git branch -a

![image](https://user-images.githubusercontent.com/43443323/112078214-95489900-8bb0-11eb-84d0-5caf8d2e392e.png)

Bước 3: Thực hiện fetch branch develop trên remote (GitHub) về máy để code

> git fetch origin develop

![image](https://user-images.githubusercontent.com/43443323/112078383-e8bae700-8bb0-11eb-9d6c-8ae05d24b252.png)

Bước 4: Thực hiện checkout sang branch develop

> git checkout develop

![image](https://user-images.githubusercontent.com/43443323/112078507-23bd1a80-8bb1-11eb-9586-e781e2ef1f86.png)

Kể từ đây, mọi thao tác push và tạo pull request sẽ được push vào branch develop, ko được thao tác thẳng lên master/main

Bước 5: Thực hiện checkout từ branch develop sang một branch feature để code phần của mình

> git checkout -b feature/ten_cong_viec

![image](https://user-images.githubusercontent.com/43443323/112078741-86aeb180-8bb1-11eb-948a-89ae7bb22940.png)

Mọi thao tác code sẽ được thực hiện trên chính branch này, push và pull request sẽ được đẩy vào branch develop, ko đc đẩy thẳng lên master/main

Bước 6: Sau khi thực hiện code xong gì đó thì sử dụng các lệnh sau để commit
> git status

Xem những phần đã được thay đổi

![image](https://user-images.githubusercontent.com/43443323/112079204-51ef2a00-8bb2-11eb-9a0e-1925fe8385a6.png)

> git add .  
> git commit -m 'phan comment ve nhung gi da code'

![image](https://user-images.githubusercontent.com/43443323/112079284-7a772400-8bb2-11eb-8f04-c0c1ce00d3f5.png)

Bước 7: Thực hiện push code từ máy lên remote (GitHub)

> git push origin ten_branch

![image](https://user-images.githubusercontent.com/43443323/112079418-b3af9400-8bb2-11eb-9cb4-1a2ca3cdf308.png)

Bước 8: Sử dụng lại lệnh **git branch -a** để kiểm tra branch từ máy đã được push lên remote chưa

> git branch -a

![image](https://user-images.githubusercontent.com/43443323/112079579-038e5b00-8bb3-11eb-8f64-c3f5acf2cf45.png)

Bước 9: Lên GitHub tạo pull request

![image](https://user-images.githubusercontent.com/43443323/112079678-2d478200-8bb3-11eb-8c81-9893f1378c88.png)

Tiếp tục sau khi nhấn compare & pull req

![image](https://user-images.githubusercontent.com/43443323/112079894-8adbce80-8bb3-11eb-9549-4022fea5afba.png)

Tiếp tục sau khi nhấn create

![image](https://user-images.githubusercontent.com/43443323/112079975-b3fc5f00-8bb3-11eb-84e9-5ec359dc01fe.png)

**Không được nhấn merge pull request, phần quyết định merge code hay ko là do nhóm trưởng thực hiện vào sau khoảng 10h tối**

Bước 10 (vào khoảng 9-10h sáng hôm sau): Thực hiện update code mới nhất về

> git fetch --prune

Lệnh này dùng để cập nhật những branch hiện đang có có

> git branch -a

Kiểm tra branch hiện có trên remote và máy

![image](https://user-images.githubusercontent.com/43443323/112080286-469cfe00-8bb4-11eb-8211-3f32c6825a54.png)

Sau khi thấy branch feature/dev_form trên remote đã bị xóa, tức là code đã được accept và merge vào branch develop -> tiến hành xóa branch feature/dev_form dưới máy

> git checkout develop 

> git branch -D feature/dev_form

![image](https://user-images.githubusercontent.com/43443323/112080672-fe321000-8bb4-11eb-9815-e8f729ae9a16.png)

Tiếp tục thực hiện update code mới nhất về

> git checkout develop

> git pull

![image](https://user-images.githubusercontent.com/43443323/112080837-3cc7ca80-8bb5-11eb-879f-012c437173f0.png)

Bước 11: Tiếp tục checkout sang branch mới và lặp lại các bước trên
