const { useState, useEffect, useRef } = React;
const Domain = "https://ezs.vn";
const hideLoading = () => {
  const elLoading = document.getElementById("preloader");
  if (elLoading) {
    elLoading.style.display = "none";
  }
};
const MainContent = () => {
  const form = useRef();

  const [loading, setLoading] = useState(false);
  const [List, setList] = useState([]);
  const [ActiveIndex, setActiveIndex] = useState(0);
  
  useEffect(() => {
    getListHightlights();
  }, []);

  const getListHightlights = async () => {
    try {
      const resultCategories = await axios.get(
        Domain + "/wp-json/wp/v2/categories?parent=65"
      );
      const resultPosts = await axios.get(
        Domain + "/wp-json/wp/v2/posts?categories=65&_embed"
      );
      const resultList = resultCategories.data.map((x) => ({
        ...x,
        Items: [],
      }));

      for (let item of resultPosts.data) {
        let catePosts = resultList.filter((x) =>
          item.categories.some((i) => i === x.id)
        );
        for (let cate of catePosts) {
          let index = resultList.findIndex((x) => x.id === cate.id);
          if (index > -1) {
            resultList[index].Items.push(item);
          }
        }
      }
      setList(resultList);
      hideLoading();
    } catch (error) {
      console.log(error);
    }
  };

  const sendEmail = (e) => {
    e.preventDefault();
    setLoading(true);
    if (form?.current && form?.current[0]?.value && form?.current[1]?.value) {
      emailjs
        .sendForm(
          "service_b2m9qlf",
          "template_08yuovs",
          form.current,
          "q6puDBkyNoYO6MuYy"
        )
        .then(
          (result) => {
            toastr.success("Đăng ký trải nghiệm thành công.", "", {
              timeOut: 1500,
            });
            location.reload()
            setLoading(false);
          },
          (error) => {
            console.log(error.text);
          }
        );
    } else {
      toastr.error("Vui lòng nhập đầy đủ thông tin.", "", {
        timeOut: 1500,
      });
      setLoading(false);
    }
  };

  return (
    <>
      <div className="container">
        <div className="row justify-content-center">
          <div className="col-12 col-xl-10">
            <div className="row highlights-tabs">
              {List &&
                List.map((item, index) => (
                  <div
                    className={`col-md-4 highlights-tab${
                      index === ActiveIndex ? " active" : ""
                    }`}
                    key={index}
                    onClick={() => setActiveIndex(index)}
                  >
                    <div>
                      <div className="title">{item.name}</div>
                      <div className="desc">{item.description}</div>
                    </div>
                  </div>
                ))}
            </div>
            <div className="row">
              {List &&
                List.map((item, index) => (
                  <div
                    className={`highlights-panels${
                      index !== ActiveIndex ? " d-none" : ""
                    }`}
                    key={index}
                  >
                    {item.Items &&
                      item.Items.map((post, idx) => (
                        <div
                          style={{
                            backgroundColor: post?.acf?.mau_nen,
                            color: post?.acf?.mau_text,
                          }}
                          className="highlights-panel"
                          key={idx}
                        >
                          <div
                            className="highlights-panel__col"
                            style={{
                              backgroundColor: post?.acf?.mau_nen_anh,
                            }}
                          >
                            <img
                              className="w-100"
                              src={post?.featured_image_url}
                              alt={post?.title?.rendered}
                            />
                          </div>
                          <div className="highlights-panel__col">
                            <div className="highlights-panel__content">
                              <div className="title">
                                {post?.title?.rendered}
                              </div>
                              <div
                                className="desc"
                                dangerouslySetInnerHTML={{
                                  __html: post?.content?.rendered,
                                }}
                              />
                            </div>
                          </div>
                        </div>
                      ))}
                  </div>
                ))}
            </div>
          </div>
        </div>
      </div>
      <div className="highlights-form">
        <div className="container not-fix-container">
          <div className="row justify-content-center">
            <div className="col-12 col-xl-10">
              <div className="row align-items-center">
                <div className="col-md-6">
                  <div className="text-center w-100 highlights-form__title">
                    <div className="title">Đăng ký trải nghiệm</div>
                    <div className="desc">
                      Nhập thông tin bên dưới để đăng ký trải nghiệm sử dụng
                      phần mềm quản lý Spa.
                    </div>
                  </div>
                  <form ref={form} onSubmit={sendEmail} autocomplete="off">
                    <div className="highlights-form__control">
                      <input
                        type="text"
                        name="from_name"
                        placeholder="Nhập họ tên"
                      />
                    </div>
                    <div className="highlights-form__control">
                      <input
                        type="text"
                        name="message"
                        placeholder="Nhập số điện thoại"
                      />
                    </div>
                    <button disabled={loading} type="submit">
                      {!loading ? "Gửi đăng ký" : "Đang thực hiện ..."}
                    </button>
                  </form>
                </div>
                <div className="col-md-6">
                  <div className="highlights-image">
                    <img
                      src="/wp-content/themes/ezsthemes/assets/img/3d3@2x.png"
                      alt="Phần mềm quản lý Spa EZS"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

ReactDOM.render(<MainContent />, document.getElementById("hightlights"));
