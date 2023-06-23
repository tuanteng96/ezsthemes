const { useState, useEffect, useRef } = React;
const Domain = "https://ezs.vn";

const hideLoading = () => {
  const elLoading = document.getElementById("preloader");
  if (elLoading) {
    elLoading.style.display = "none";
  }
};

const MainContent = () => {
  const [loading, setLoading] = useState(false);
  const [List, setList] = useState([]);

  useEffect(() => {
    getListCustomers();
  }, []);

  const getListCustomers = async () => {
    try {
      const { data } = await axios.get(
        Domain + "/wp-json/wp/v2/posts?categories=13&_embed"
      );
      setList(data);
      hideLoading();
    } catch (error) {
      console.log(error);
    }
    };
    
    console.log(List);

  return <div>a</div>;
};

ReactDOM.render(<MainContent />, document.getElementById("customers"));
