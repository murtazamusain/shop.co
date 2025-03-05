প্রজেক্টি Tailwind Cli দিয়ে করেছি সকল সিএসসিএস tailwindcss class দিয়েই করার
চেষ্টা করেছি। ফিগমা
লিংকঃhttps://www.figma.com/design/PFzIQiqkK9MjeCIDyurRrb/E-commerce-Website-Template-(Freebie)-(Community)-(Copy)?node-id=31-32&t=qknacxLKbexqaRdb-0

.assets/css/input.css ফাইলে সকল কাস্টম সিএসএস করা হয়েছে tailwindcss নিয়মে

প্রজেক্টের কাস্টমাইজে নিচের কমান্ড ব্যবহার করলেই হবে 

npm install tailwindcss @tailwindcss/cli

npx @tailwindcss/cli -i ./assets/css/input.css -o ./assets/css/output.css --watch
